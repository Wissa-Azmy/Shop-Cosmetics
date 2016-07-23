@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">

<h1><b>All Invoices</b></h1>

	<table class="table">
		<thead>
			<tr>
				<th>Date</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Customer</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
	@foreach ($invoices as $invoice)

		<tr>
			<td><a href="/invoices/{{$invoice->id}}">{{$invoice->created_at}}</a></td>
			<td>{{$invoice->unit_price}}</td>
			<td>{{$invoice->quantity}}</td>
			<td>{{$invoice->customer->name}}</td>
			<td><a href="/invoices/{{$invoice->id}}/edit" class="btn btn-primary">Edit</a></td>
		</tr>

	@endforeach
		</tbody>

	</table>
	</div>
</div>

@stop