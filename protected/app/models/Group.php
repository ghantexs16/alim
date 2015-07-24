<?php
class Group extends Eloquent{
  protected $table="groups";

  public static $rules=[
    'kode'=>'required|unique:groups,kode',
    'nama'=>'required|unique:groups,name'
  ];

  public static $pesan=[
    'kode.required'=>'Kode Group harus diisi',
    'kode.unique'=>'Kode Groups sudah ada',
    'nama.required'=>'Nama Groups harus diisi',
    'nama.unique'=>'Nama Groups sudah ada'
  ];
}
