<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Anggota extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anggota', function(Blueprint $table)
		{
			$table->string('id_ang',8)->primary();
			$table->string('nama_ang',100);
			$table->enum('jeniskelamin',array('L','P'));
			$table->string('murobbi',100)->nullable();
			$table->string('tempat_lahir',100)->nullable();
			$table->date('tanggal_lahir')->nullable();
			$table->string('alamat',100)->nullable();
			$table->string('no_hp',15)->nullable();
			$table->string('pekerjaan',100)->nullable();
			$table->string('pendidikan_terakhir',50)->nullable();
			$table->string('hobby',100)->nullable();
			$table->string('kafaah',100)->nullable();
			$table->string('nama_pasangan',100)->nullable();
			$table->string('jumlah_anak')->nullable();
			$table->string('id_status')->nullable();
			$table->date('tgl_masuk')->nullable();
			$table->string('id_kel',12)->nullable();

			$table->foreign('id_kel')->references('id_kel')
				->on('kelompok')
				->onUpdate('cascade')
				->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('anggota');
	}

}
