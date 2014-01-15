<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorsekLaporanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('corsek_laporan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->string('file_laporan');
			$table->string('keterangan')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('corsek_laporan');
	}

}