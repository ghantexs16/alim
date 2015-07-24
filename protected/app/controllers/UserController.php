<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public $layout="template.default";

	public function index()
	{
		$user=User::all();

		$this->layout->content=View::make('user.index')
			->with('user',$user);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$anggota=DB::select("select * from anggota where id_ang not in
			(select users.id_ang from users where users.id_ang=anggota.id_ang)");

		$this->layout->content=View::make('user.create')
			->with('anggota',$anggota);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
			'anggota'=>'required|unique:users,id_ang',
			'username'=>'required|unique:users,username',
			'email'=>'required|unique:users,email',
			'password'=>'required'
		);

		$pesan=array(
			'anggota.required'=>'Anggota harus diisi',
			'username.required'=>'Username harus diisi',
			'username.unique'=>'Username sudah ada',
			'email.required'=>'Email harus diisi',
			'email.unique'=>'Email sudah digunakan',
			'password.required'=>'Password harus diisi'
		);

		$validasi=Validator::make(Input::all(),$rules,$pesan);

		if($validasi->fails()){
			return Redirect::back()
				->withInput()
				->withErrors($validasi);
		}else{
			//membuat admin baru
			$admin=Sentry::register(array(
				'id_ang'=>Input::get('anggota'),
				'username'=>Input::get('username'),
				'email'=>Input::get('email'),
				'password'=>Input::get('password')
			),true);

			//cari group admin
			$adminGroup=Sentry::findGroupByName(Input::get('level'));

			//masukan user ke group admin
			$admin->addGroup($adminGroup);

			Session::flash('pesan',"<div class='alert alert-success'>Data Berhasil disimpan</div>");

			return Redirect::to('admin/users');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
