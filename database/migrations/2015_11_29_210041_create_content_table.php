<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContentTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('content', function (Blueprint $table) {
			$table->increments('content_id')->unsigned();
			$table->integer('content_category_id')->unsigned();
			$table->string('title', '100')->default('');
			$table->text('description')->default('');
			$table->string('path', 100)->default('');
			$table->integer('download_count')->unsinged();
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('content');
	}
}
