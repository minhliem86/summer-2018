<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('register', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fullname')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->integer('id_city')->nullable();
			$table->integer('id_center')->nullable();
			$table->integer('id_program')->nullable();
			$table->text('message')->nullable();
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
		Schema::drop('register');
	}

}
