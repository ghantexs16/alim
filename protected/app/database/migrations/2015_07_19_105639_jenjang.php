<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jenjang extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kat_jenjang', function(Blueprint $table)
		{
			$table->string('id_jenjang',3)->primary();
			$table->string('nama_jenjang',50);
			$table->text('keterangan');
			$table->enum('status',array('aktif','tidak aktif'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jenjang');
	}

}
