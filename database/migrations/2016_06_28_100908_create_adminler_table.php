<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminlerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adminler', function(Blueprint $table)
		{
			$table->increments('kullanici_id');
			$table->string('adi')->default('');
			$table->string('password', 32)->default('');
			$table->string('mail')->nullable();
			$table->string('soyadi')->nullable();
			$table->string('kullanici_adi')->default('');
			$table->date('date_created')->nullable();
			$table->boolean('super_user')->nullable();
			$table->integer('aktif')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('adminler');
	}

}
