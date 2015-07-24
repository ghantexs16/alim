<?php
class Mkelompok extends Eloquent{
	protected $table="kelompok";
	protected $primaryKey="id_kel";

	public $timestamps=false;

	public static $rules=[
		'jenjang'=>'required',
		'jk'=>'required',
		'kecamatan'=>'required',
		'grup'=>'required'
	];

	public static $pesan=[
		'jenjang.required'=>'Jenjang harus diisi',
		'jk.required'=>'Jenis Kelamin harus diisi',
		'kecamatan.required'=>'Kecamatan harus diisi',
		'grup.required'=>'Grup harus diisi'
	];

	public function jenjang(){
		return $this->belongsTo('Jenjang','id_jenjang');
	}
}