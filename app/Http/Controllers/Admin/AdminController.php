<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
	public function index()
	{
		$passwoed = Crypt::encrypt('admin');
		$admin = new \App\Admin;
		$admin->username = 'admin';
		$admin->password = $passwoed;
		$admin->email = '420459315@qq.com';
		$admin->created_at = date('Y-m-d H:i:s');
		$admin->updated_at = date('Y-m-d H:i:s');
		$admin->save();
	}
}
