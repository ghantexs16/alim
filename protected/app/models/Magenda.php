<?php
class Magenda extends Eloquent{
	protected $table="agenda";

	public $timestamps=false;

	public static $rules=[
		'judul'=>'required',
		'deskripsi'=>'required'
	];

	public static $pesan=[
		'judul.required'=>'Judul harus diiisi',
		'deskripsi.required'=>'Deskripsi harus diisi'
	];
}