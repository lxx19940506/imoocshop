<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	//指定表，默认是单数形式的表
	protected $table = 'admins';
	//指定主键 默认是id
	protected $primaryKey = 'id';
}
