@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-md-6 col-md-offset-3">

<h3>Add a New Customer</h3>

		<form method="POST" action="/customers">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" name="name" placeholder="Name" class="form-control">
				<input type="text" name="phone" placeholder="Phone" class="form-control">
				<input type="text" name="address" placeholder="Address" class="form-control">

			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Customer</button>
			</div>
		</form>

	<hr>


<h1><b>All Customers</b></h1>

	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
	@foreach ($customers as $customer)

		<tr>
			<td><a href="/customers/{{$customer->id}}"> {{$customer->name}} </a></td>
			<td>{{$customer->phone}}</td>
			<td>{{$customer->address}}</td>
			<td><a href="/items/{{$customer->id}}/edit" class="btn btn-primary">Edit</a></td>
		</tr>

	@endforeach
		</tbody>

	</table>

		
</div>
</div>
@stop