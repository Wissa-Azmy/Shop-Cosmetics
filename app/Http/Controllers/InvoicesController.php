<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Invoice;

use App\Customer;

use DB;

class InvoicesController extends Controller
{
    
    public function index(){

		$invoices = invoice::all();

		return view('invoices.index', compact('invoices'));
	}


	public function show(Invoice $invoice){

		return view('invoices.show', compact('invoice'));

	}

	public function  store(Request $request, Customer $customer){

		$invoice = new Invoice;
		$invoice->name = $request->name;
		$invoice->price = $request->price;
		$invoice->qty = $request->qty;

		$customer->invoices()->save($invoice);
		// $item->supplier_id = $supplier->id;

		// return $request->all();

		return back();   // redirect to the last page

	}

	public function edit(Invoice $invoice){

		return view('invoices.edit', compact('invoice'));

	}

    public function update(Request $request, Invoice $invoice){
    	$invoice->update($request->all());
    	return back();
    }
}
