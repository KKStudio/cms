<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterThemesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kkstudio_themes', function(Blueprint $table)
		{
			$table->text('provides');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kkstudio_themes', function(Blueprint $table)
		{
			$table->dropColumn('provides');
		});
	}

}
