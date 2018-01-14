<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//验证‘admins’表是否存在
		if (!Schema::hasTable('admins')) {
			//创建admins表
			Schema::create('admins', function (Blueprint $table) {
				//设置默认字符串长度
//				Schema::defaultStringLength(191);
				//引擎设置
//				$table->engine = 'InnoDb';
				$table->smallIncrements('id')->comment('ID、主键、自增、small类型');
				$table->string('username', '20')->unique()->comment('用户名、varchar20、唯一');
				$table->char('password', '255')->comment('密码、char32');
				$table->string('email', '50')->comment('邮箱、varchar50');
				$table->nullableTimestamps();
			});
		}

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('admins');
	}
}
