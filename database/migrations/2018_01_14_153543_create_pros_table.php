<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pros', function (Blueprint $table) {
			$table->unsignedInteger('id');
			$table->string('pName', '50')->unique();
			$table->string('pSn', '50');
			$table->integer('pNum')->unsigned()->default(1);
			$table->decimal('mPrice', '10', '2');
			$table->decimal('iPrice', '10', '2');
			$table->text('pDesc');
			$table->string('pImg', '50');
			$table->integer('pubTime')->unsigned();
			$table->tinyInteger('isShow')->default(1)->comment('tinyint(1)需要在为数据库更改');
			$table->tinyInteger('isHot')->default(1)->comment('tinyint(1)同上');
			$table->unsignedSmallInteger('cId');
			$table->nullableTimesTamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('pros');
	}
}
