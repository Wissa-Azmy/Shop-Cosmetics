<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\item;

class ItemsController extends Controller
{
	public function index(){

		$items = item::all();

		return view('items.index', compact('items'));
	}


	public function show(Item $item){

		return view('items.show', compact('item'));

	}
    //
}
