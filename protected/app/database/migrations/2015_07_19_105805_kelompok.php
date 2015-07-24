<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kelompok extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kelompok', function(Blueprint $table)
		{
			$table->string('id_kel',12)->primary();
			$table->string('id_jenjang',3);
			$table->enum('jeniskelamin',array('L','P'));
			$table->string('kecamatan',50);
			$table->integer('no_grup');
			

			$table->foreign('id_jenjang')->references('id_jenjang')
				->on('kat_jenjang')
				->onDelete('restrict')
				->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kelompok');
	}

}
