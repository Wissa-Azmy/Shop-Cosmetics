<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
	public function home()
	{
		$users = ['Wissa', 'Sally'];
		return view('about', compact('users'));
	}
    //
}
