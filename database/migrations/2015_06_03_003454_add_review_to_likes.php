<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReviewToLikes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('likes', function(Blueprint $table)
		{
			$table->integer('review_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('likes', function(Blueprint $table)
		{
			$table->dropColumn('review_id');
			$table->dropColumn('user_id');
		});
	}

}
