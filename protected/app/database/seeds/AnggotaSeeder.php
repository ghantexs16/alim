<?php
class AnggotaSeeder extends Seeder{
	public function run(){
		DB::table('anggota')->delete();

		$data=array(
			'id_ang'=>'AG0001',
			'nama_ang'=>'Ayu',
			'jeniskelamin'=>'Wanita'
		);

		DB::table('anggota')->insert($data);
	}
}