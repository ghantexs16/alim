<?php
class SettingSeeder extends Seeder{
	public function run(){
		DB::table('setting');

		$data=array(
			'nama_sekolah'=>'TK AISYIYAH BUSTANUL ATHFAL KLUWUT',
			'alamat'=>'Kab. Brebes, Jawa Tengah',
			'telp'=>'',
			'fax'=>'',
			'thn_ajaran'=>'2014-2015'
		);

		DB::table('setting')->insert($data);
	}
}