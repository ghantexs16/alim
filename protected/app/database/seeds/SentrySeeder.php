<?php
class SentrySeeder extends Seeder{
	public function run(){
		DB::table('users_groups')->delete();
		DB::table('groups')->delete();
		DB::table('users')->delete();
		DB::table('throttle')->delete();

		try{
			//membuat group admin
			$admin=Sentry::createGroup(array(
					'name'			=>'admin',
					'permissions'	=>array(
						'admin'=>1,
					)

			));

		}catch(Cartalyst\Sentry\Groups\NameRequiredException $e){
			echo "Nama Group harus diisi";
		}catch(Cartalyst\Sentry\Groups\GroupExistsException $e){
			echo "Group Sudah Ada";
		}

		try{
			//membuat admin baru
			$admin=Sentry::register(array(
				'id_ang'=>'AG0001',
				'username'=>'admin',
				'email'=>'crush.ve@gmail.com',
				'password'=>'admin123'
			),true);

			//cari group admin
			$adminGroup=Sentry::findGroupByName('admin');

			//masukan user ke group admin
			$admin->addGroup($adminGroup);

		}catch(Cartalyst\Sentry\Users\LoginRequiredException $e){
			echo "Field login harus diisi";
		}catch(Cartalyst\Sentry\Users\PasswordRequiredException $e){
			echo "Password harus diisi";
		}catch(Cartalyst\Sentry\Users\UserExistsException $e){
			echo "User dengan akun ini sudah ada";
		}catch(Cartalyst\Sentry\Groups\GroupNotFoundException $e){
			echo "Group tidak ada";
		}
	}

}
