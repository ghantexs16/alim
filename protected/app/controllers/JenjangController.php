<?php

class JenjangController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public $layout="template.default";

	public function index()
	{
		$jenjang=Mjenjang::all();

		$this->layout->content=View::make('jenjang.index')
			->with('jenjang',$jenjang);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content=View::make('jenjang.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validasi=Validator::make(Input::all(),Mjenjang::$rules,Mjenjang::$pesan);

		if($validasi->fails()){
			return Redirect::back()
				->withInput()
				->withErrors($validasi);
		}else{
			$jenjang=new Mjenjang;
			$jenjang->id_jenjang=Input::get('id');
			$jenjang->nama_jenjang=Input::get('nama');
			$jenjang->keterangan=Input::get('keterangan');
			$jenjang->status=Input::get('status');
			$jenjang->save();

			Session::flash('pesan',"<div class='alert alert-success'>Data berhasil disimpan</div>");
			return Redirect::to('admin/jenjang');
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
		$jenjang=Mjenjang::find($id);
		$kelompok=DB::table('kelompok')->where('id_jenjang',$jenjang->id_jenjang);

		$this->layout->content=View::make('jenjang.konfirmasi')
			->with('jenjang',$jenjang)
			->with('kelompok',$kelompok);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$jenjang=Mjenjang::find($id);

		$this->layout->content=View::make('jenjang.edit')
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
		$rules=[
			'id'=>'required',
			'nama'=>'required',
			'keterangan'=>'required',
			'status'=>'required'
		];

		$validasi=Validator::make(Input::all(),$rules,Mjenjang::$pesan);

		if($validasi->fails()){
			return Redirect::back()
				->withInput()
				->withErrors($validasi);
		}else{
			$jenjang=Mjenjang::find($id);
			$jenjang->id_jenjang=Input::get('id');
			$jenjang->nama_jenjang=Input::get('nama');
			$jenjang->keterangan=Input::get('keterangan');
			$jenjang->status=Input::get('status');
			$jenjang->save();

			Session::flash('pesan',"<div class='alert alert-success'>Data berhasil diupdate</div>");
			return Redirect::to('admin/jenjang');
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
		$jenjang=Mjenjang::find($id);
		$kelompok=DB::table('kelompok')->where('id_jenjang',$jenjang->id_jenjang);

		if($kelompok->count()>0){
			$html="<div class='alert alert-danger'>Data gagal dihapus karena 
			masih ada relasi dengan data kelompok</div>";			
		}else{
			$html="<div class='alert alert-success'>Data Berhasil dihapus</div>";
			$jenjang->delete();
		}

		Session::flash('pesan',$html);
		return Redirect::back();
	}


}
