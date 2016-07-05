@extends('layout')


@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1>{{$customer->name}}</h1>

		<h3>Add a New Invoice</h3>

		<form method="POST" action="/customers/{{ $customer->id }}/invoices">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<input type="text" name="name" placeholder="invoice Name" class="form-control">
				<input type="text" name="price" placeholder="Price" class="form-control">
				<input type="text" name="qty" placeholder="Quantity" class="form-control">
				{{-- <input type="text" name="consumer_discount" placeholder="Consumer Discount" class="form-control"> --}}
				{{-- <input type="text" name="customer_discount" placeholder="customer Discount" class="form-control"> --}}

			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Invoice</button>
			</div>
		</form>

				<hr>

		<table class="table">
		<thead>
			<tr>
				<th>Title</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
	@foreach ($customer->invoices as $invoice)

		<tr>
			<td>{{$invoice->name}}</td>
			<td>{{$invoice->price}}</td>
			<td>{{$invoice->qty}}</td>
			<td><a href="/invoices/{{$invoice->id}}/edit" class="btn btn-primary">Edit</a></td>
		</tr>

	@endforeach
		</tbody>

	</table>

		
	</div>
</div>
@stop