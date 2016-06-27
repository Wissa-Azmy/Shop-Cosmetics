@extends('layout')


@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1>{{$supplier->name}}</h1>

		<ul class="list-group">
			@foreach ($supplier->items as $item)
				<li class="list-group-item">{{$item->name}}</li>
			@endforeach
		</ul>

		<hr>
		<h3>Add a New Item</h3>

		<form method="POST" action="/suppliers/{{ $supplier->id }}/items">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<input type="text" name="name" placeholder="Item Name" class="form-control">
				<input type="text" name="price" placeholder="Price" class="form-control">
				<input type="text" name="qty" placeholder="Quantity" class="form-control">
				<input type="text" name="commission" placeholder="Commission" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add Item</button>
			</div>
		</form>
	</div>
</div>
@stop