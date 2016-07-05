@extends('layout')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">

<h1><b>All Items</b></h1>

	<table class="table">
		<thead>
			<tr>
				<th>Title</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Supplier</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
	@foreach ($items as $item)

		<tr>
			<td>{{$item->name}}</td>
			<td>{{$item->price}}</td>
			<td>{{$item->qty}}</td>
			<td>{{$item->supplier->name}}</td>
			<td><a href="/items/{{$item->id}}/edit" class="btn btn-primary">Edit</a></td>
		</tr>

	@endforeach
		</tbody>

	</table>
	</div>
</div>

@stop