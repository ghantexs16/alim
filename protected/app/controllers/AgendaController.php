<?php

class AgendaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public $layout="template.default";

	public function index()
	{
		$agenda=Magenda::all();

		$this->layout->content=View::make('agenda.index')
			->with('agenda',$agenda);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content=View::make('agenda.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validasi=Validator::make(Input::all(),Magenda::$rules,Magenda::$pesan);

		if($validasi->fails()){
			return Redirect::back()
				->withInput()
				->withErrors($validasi);
		}else{
			$agenda=new Magenda;
			$agenda->judul=Input::get('judul');
			$agenda->deskripsi=Input::get('deskripsi');
			$agenda->tanggal=date('Y-m-d');

			if(Input::hasFile('gambar')){
				$file=Input::file('gambar');
				$filename=str_random(5).'-'.$file->getClientOriginalName();
				$destinationPath='uploads/agenda/';
				$file->move($destinationPath,$filename);
				$agenda->gambar=$filename;
			}

			$agenda->id_user=Sentry::getUser()->id;

			$agenda->save();

			Session::flash('pesan',"<div class='alert alert-success'>Data berhasil disimpan</div>");

			return Redirect::to('admin/agenda');

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
		$agenda=Magenda::find($id);

		$this->layout->content=View::make('agenda.edit')
			->with('agenda',$agenda);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validasi=Validator::make(Input::all(),Magenda::$rules,Magenda::$pesan);

		if($validasi->fails()){
			return Redirect::back()
				->withInput()
				->withErrors($validasi);
		}else{
			$agenda=Magenda::find($id);
			$agenda->judul=Input::get('judul');
			$agenda->deskripsi=Input::get('deskripsi');
			$agenda->tanggal=date('Y-m-d');

			if(Input::hasFile('gambar')){
				$file=Input::file('gambar');
				$filename=str_random(5).'-'.$file->getClientOriginalName();
				$destinationPath='uploads/agenda/';
				$file->move($destinationPath,$filename);
				

				if($agenda->gambar){
					$fotolama=$agenda->gambar;
					$filepath=public_path().DIRECTORY_SEPARATOR.'uploads/agenda'.DIRECTORY_SEPARATOR.$agenda->gambar;

					try{
						File::delete($filepath);
					}catch(FileNotFoundException $e){

					}
				}

				$agenda->gambar=$filename;
			}

			$agenda->id_user=Sentry::getUser()->id;

			$agenda->save();

			Session::flash('pesan',"<div class='alert alert-success'>Data berhasil diupdate</div>");

			return Redirect::to('admin/agenda');

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
		$agenda=Magenda::find($id);

			if($agenda->gambar){
				$fotolama=$agenda->gambar;
				$filepath=public_path().DIRECTORY_SEPARATOR.'uploads/agenda'.DIRECTORY_SEPARATOR.$agenda->gambar;

				try{
					File::delete($filepath);
				}catch(FileNotFoundException $e){

				}
			}

			$agenda->delete();
			return Redirect::to('admin/agenda')
				->with('pesan',"<hr><div class='alert alert-info'>Data Berhasil dihapus</div>");
	}


}
