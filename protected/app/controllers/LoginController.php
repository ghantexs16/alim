<?php
class LoginController extends BaseController{
	public function login(){
		return View::make('login.index');
	}

	public function authenticate(){
		$input=Input::all();
		$rules=array(
			'username'=>'required',
			'password'=>'required'
		);

		$pesan=array(
			'username.required'=>'Username harus diisi<br>',
			'password.required'=>'Password harus diisi',
			'email.email'=>'Email harus valid<br>'
		);

		$validasi=Validator::make(Input::all(),$rules,$pesan);

		if($validasi->fails()){
			return Redirect::back()
				->withInput()
				->withErrors($validasi);
		}else{
			$post=array(
				'username'=>Input::get('username'),
				'password'=>Input::get('password')
			);

			try{
				Sentry::authenticate($post,false);

				// Logged in successfully - redirect based on type of user
				$user = Sentry::getUser();

			    if($user->hasAccess('admin')){
			    	return Redirect::intended('admin/home');
					}else{
			    	return Redirect::to('login')
			    		->with('pesan',"<div class='alert alert-info'>
			    			Login Gagal</div>");
			    }

			}catch (Cartalyst\Sentry\Users\LoginRequiredException $e){
				Session::flash('pesan',"<div class='alert alert-danger'>
				Login field harus diisi</div>");
				return Redirect::back();
			}
			catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
			{
				Session::flash('pesan',"<div class='alert alert-danger'>
				Password harus diisi</div>");
				return Redirect::back();
			}
			catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
			{
				Session::flash('pesan',"<div class='alert alert-danger'>
				Password Salah, coba Lagi!</div>");
				return Redirect::back();
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
				Session::flash('pesan',"<div class='alert alert-danger'>
				User tidak tersedia</div>");
				return Redirect::back();
			}
			catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
			{
				Session::flash('pesan',"<div class='alert alert-danger'>
				User Belum diaktivasi</div>");
				return Redirect::back();
			}

			// The following is only required if the throttling is enabled
			catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
			{
				Session::flash('pesan',"<div class='alert alert-danger'>
				User Suspend</div>");
				return Redirect::back();
			}
			catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
			{
				Session::flash('pesan',"<div class='alert alert-danger'>
				User ini sudah dibanned</div>");
				return Redirect::back();
			}
		}
	}

	public function reset(){
		try{
			$email=Input::get('email');
			$user=Sentry::findUserByLogin($email);
			Session::put('sessid',$user->id);
			$resetCode=$user->getResetPasswordCode();

			//kirim email
			Mail::send('emails.auth.reminder', array('token'=>$resetCode), function($message) use($email)
	    {
	        $message->from('jamal.apriadi@gmail.com',
					'reset password');

	        $message->to($email, 'User')
						->subject( Input::get('Reset Password') );
	    });
		}catch(Cartalyst\Sentry\Users\UserNotFoundException $e){
			Session::flash('pesan',"<div class='alert alert-danger'>
			User tidak ditemukan</div>");

			return Redirect::back();
		}

		Session::flash('pesan',
		"<div class='alert alert-success'>
		Cek Email Anda</div>");
    return Redirect::back();
	}

	public function logout(){
		Sentry::logout();
		return Redirect::to('login')
			->with('pesan',
				"<div class='alert alert-info'>
				Anda sudah Keluar</div>");
	}
}
