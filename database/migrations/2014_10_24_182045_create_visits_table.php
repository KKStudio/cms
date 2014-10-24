<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kkstudio_visits', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ip_address')->nullable();
			$table->string('url')->nullable();
			$table->string('referer')->nullable();
			$table->string('abbr', 2)->nullable();
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
		Schema::drop('kkstudio_visits');
	}

}
