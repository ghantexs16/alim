<?php
class Manggota extends Eloquent{
	protected $table="anggota";
	protected $primaryKey="id_ang";

	public $timestamps=false;

	public static $rules=[
		'id'=>'required|unique:anggota,id_ang',
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

	public static $pesan=[
		'id.required'=>'ID Anggota harus diisi'
	];
}