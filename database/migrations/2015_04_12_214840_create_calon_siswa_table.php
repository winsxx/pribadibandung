<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalonSiswaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calon_siswa', function(Blueprint $table)
		{
            $table->integer('id')->references('id')->on('users');
			$table->string('nama', 20);
			$table->string('alamat', 50);
			$table->string('tmpt_lahir',50)	;
			$table->string('tgl_lahir',50)	;
			$table->integer('gender',1)	;
			$table->string('no_hp',15)	;
			$table->string('asal_sekolah', 30);
			$table->string('username', 25)->unique();
			$table->integer('status_pembayaran');
			$table->integer('status_kelulusan');		
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
		Schema::drop('calon_siswa');
	}

}
