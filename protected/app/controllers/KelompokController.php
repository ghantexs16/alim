<?php

class KelompokController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public $layout="template.default";
	
	public function index()
	{
		$kelompok=Mkelompok::all();

		$this->layout->content=View::make('kelompok.index')
			->with('kelompok',$kelompok);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$jenjang=Mjenjang::all();

		$this->layout->content=View::make('kelompok.create')
			->with('jenjang',$jenjang);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validasi=Validator::make(Input::all(),Mkelompok::$rules,Mkelompok::$pesan);

		if($validasi->fails()){
			return Redirect::back()
				->withInput()
				->withErrors($validasi);
		}else{
			$kode=Input::get('jenjang').'-'.Input::get('jk').'-'.Input::get('kecamatan').'-'.Input::get('grup');

			$cek=DB::table('kelompok')->where('id_kel',$kode)->count();

			if($cek>0){
				Session::flash('pesan',"<div class='alert alert-danger'>Data ini sudah ada</div>");

				return Redirect::back()
					->withInput();
			}else{
				$kelompok=new Mkelompok;
				$kelompok->id_kel=$kode;
				$kelompok->id_jenjang=Input::get('jenjang');
				$kelompok->jeniskelamin=Input::get('jk');
				$kelompok->kecamatan=Input::get('kecamatan');
				$kelompok->no_grup=Input::get('grup');
				$kelompok->save();

				Session::flash('pesan',"<div class='alert alert-success'>Data Berhasil disimpan</div>");
				return Redirect::to('admin/kelompok');
			}
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
		$kelompok=Mkelompok::find($id);
		$jenjang=Mjenjang::all();

		$this->layout->content=View::make('kelompok.edit')
			->with('kelompok',$kelompok)
			->with('jenjang',$jenjang);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validasi=Validator::make(Input::all(),Mkelompok::$rules,Mkelompok::$pesan);

		if($validasi->fails()){
			return Redirect::back()
				->withInput()
				->withErrors($validasi);
		}else{
			$kelompok=Mkelompok::find($id);
			$kelompok->id_jenjang=Input::get('jenjang');
			$kelompok->jeniskelamin=Input::get('jk');
			$kelompok->kecamatan=Input::get('kecamatan');
			$kelompok->no_grup=Input::get('grup');
			$kelompok->save();

			Session::flash('pesan',"<div class='alert alert-success'>Data Berhasil diupdate</div>");
			return Redirect::to('admin/kelompok');
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
		$kel=Mkelompok::find($id);

		$anggota=DB::table('anggota')->where('id_kel',$id);

		if($anggota->count()>0){
			$html="<div class='alert alert-danger'>Data tidak dapat dihapus karena ada data anggota yang 
			menggunakan id kelompok ini</div>";
		}else{
			$html="<div class='alert alert-success'>Data berhasil dihapus</div>";
			$kel->delete();
		}

		Session::flash('pesan',$html);

		return Redirect::back();
	}


}
