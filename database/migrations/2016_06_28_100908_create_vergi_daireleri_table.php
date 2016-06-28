<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVergiDaireleriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vergi_daireleri', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('il_id')->nullable();
			$table->string('kodu', 20)->nullable();
			$table->string('adi', 32)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vergi_daireleri');
	}

}
