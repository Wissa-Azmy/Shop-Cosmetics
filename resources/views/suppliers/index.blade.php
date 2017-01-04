@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-md-6 col-md-offset-3">

<div class="modal-content">

	<div class="modal-header">
		<h3 class="modal-title">Add a New Supplier</h3>
	</div>
	
	<div class="modal-body">
		<form method="POST" action="/suppliers">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" name="name" placeholder="Name" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" name="phone" placeholder="Phone" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" name="address" placeholder="Address" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Supplier</button>
			</div>
		</form>
	</div>{{--modal-body--}}
</div>{{--modal-content--}}

			<hr>

<h1><b>All Suppliers</b></h1>

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
	@foreach ($suppliers as $supplier)

		<tr>
			<td><a href="/suppliers/{{$supplier->id}}"> {{$supplier->name}} </a></td>
			<td>{{$supplier->phone}}</td>
			<td>{{$supplier->address}}</td>
			<td><a href="/items/{{$supplier->id}}/edit" class="btn btn-primary">Edit</a></td>
		</tr>

	@endforeach
		</tbody>

	</table>

		
</div>
</div>
@stop