<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Supplier;


class SuppliersController extends Controller
{

	public function index(){

		$suppliers = Supplier::all();
		return view('suppliers.index', compact('suppliers'));

	}


	public function show(Supplier $supplier){

		return view('suppliers.show', compact('supplier'));

	}
    //
}
