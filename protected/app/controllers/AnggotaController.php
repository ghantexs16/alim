<?php

class AnggotaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public $layout="template.default";

	public function index()
	{
		$anggota=DB::table('anggota')->where('id_ang','<>',Sentry::getUser()->id_ang)->get();

		$this->layout->content=View::make('anggota.index')
			->with('anggota',$anggota);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$kel=Mkelompok::all();

		$this->layout->content=View::make('anggota.create')
			->with('kelompok',$kel);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validasi=Validator::make(Input::all(),Manggota::$rules,Manggota::$pesan);

		if($validasi->fails()){
			return Redirect::back()	
				->withInput()
				->withErrors($validasi);
		}else{
			$anggota=new Manggota;
			$anggota->id_ang=Input::get('id');
			$anggota->nama_ang=Input::get('nama');
			$anggota->jeniskelamin=Input::get('jk');
			$anggota->murobbi=Input::get('murrobi');
			$anggota->tempat_lahir=Input::get('tempat');
			$anggota->tanggal_lahir=date('Y-m-d',strtotime(Input::get('tanggal')));
			$anggota->alamat=Input::get('alamat');
			$anggota->no_hp=Input::get('hp');
			$anggota->pekerjaan=Input::get('pekerjaan');
			$anggota->pendidikan_terakhir=Input::get('pendidikan');
			$anggota->hobby=Input::get('hobby');
			$anggota->kafaah=Input::get('kafaah');
			$anggota->nama_pasangan=Input::get('pasangan');
			$anggota->jumlah_anak=Input::get('anak');
			$anggota->id_status=1;
			$anggota->tgl_masuk=Date('Y-m-d');
			$anggota->id_kel=Input::get('kelompok');
			$anggota->tgl_masuk=date('Y-m-d',strtotime(Input::get('masuk')));
			$anggota->save();

			Session::flash('pesan',"<div class='alert alert-success'>Data berhasil disimpan</div>");
			return Redirect::to('admin/anggota');
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
		$anggota=Manggota::find($id);

		$this->layout->content=View::make('anggota.view')
			->with('anggota',$anggota);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$kel=Mkelompok::all();

		$anggota=Manggota::find($id);

		$this->layout->content=View::make('anggota.edit')
			->with('kelompok',$kel)
			->with('anggota',$anggota);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules=[
			'id'=>'required',
			'nama'=>'required',
			'jk'=>'required',
			'tempat'=>'required',
			'tanggal'=>'required',
			'murrobi'=>'required',
			'alamat'=>'required',
			'hp'=>'required',
			'pekerjaan'=>'required',
			'pendidikan'=>'required',
			'kelompok'=>'required'
		];

		$validasi=Validator::make(Input::all(),$rules,Manggota::$pesan);

		if($validasi->fails()){
			return Redirect::back()	
				->withInput()
				->withErrors($validasi);
		}else{
			$anggota=Manggota::find($id);
			$anggota->id_ang=Input::get('id');
			$anggota->nama_ang=Input::get('nama');
			$anggota->jeniskelamin=Input::get('jk');
			$anggota->murobbi=Input::get('murrobi');
			$anggota->tempat_lahir=Input::get('tempat');
			$anggota->tanggal_lahir=date('Y-m-d',strtotime(Input::get('tanggal')));
			$anggota->alamat=Input::get('alamat');
			$anggota->no_hp=Input::get('hp');
			$anggota->pekerjaan=Input::get('pekerjaan');
			$anggota->pendidikan_terakhir=Input::get('pendidikan');
			$anggota->hobby=Input::get('hobby');
			$anggota->kafaah=Input::get('kafaah');
			$anggota->nama_pasangan=Input::get('pasangan');
			$anggota->jumlah_anak=Input::get('anak');
			$anggota->id_status=1;
			$anggota->tgl_masuk=Date('Y-m-d');
			$anggota->id_kel=Input::get('kelompok');
			$anggota->tgl_masuk=date('Y-m-d',strtotime(Input::get('masuk')));
			$anggota->save();

			Session::flash('pesan',"<div class='alert alert-success'>Data berhasil disimpan</div>");
			return Redirect::to('admin/anggota');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$anggota=Manggota::find($id);

		$user=DB::table('users')->where('id_ang',$anggota->id_ang);
		$ibadah=DB::table('ibadah')->where('id_ang',$anggota->id_ang);

		if($user->count()>0){
			$user->delete();
		}

		if($ibadah->count()>0){
			$ibadah->delete();
		}

		$anggota->delete();

		Session::flash('pesan',"<div class='alert alert-success'>Data berhasil dihapus</div>");
		return Redirect::back();
	}


}
