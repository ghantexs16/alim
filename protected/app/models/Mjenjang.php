<?php
class Mjenjang extends Eloquent{
	protected $table="kat_jenjang";
	protected $primaryKey="id_jenjang";

	public $timestamps=false;

	public static $rules=[
		'id'=>'required|unique:kat_jenjang,id_jenjang',
		'nama'=>'required',
		'keterangan'=>'required',
		'status'=>'required'
	];

	public static $pesan=[
		'id.required'=>'ID Jenjang harus diisi',
		'id.unique'=>'Id Jenjang sudah ada',
		'keterangan.required'=>'Keterangan harus diisi',
		'status.required'=>'Status harus diisi'
	];	

	public function kategori(){
		return $this->hasOne('Kategori','id_jenjang');
	}
}