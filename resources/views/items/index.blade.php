@extends('layout')

@section('content')

<h1> All Items </h1>



<table>
	<thead>
		<tr>
			<th>Title</th>
			<th>Price</th>
			<th>Quantity</th>
		</tr>
	</thead>
	<tbody>
@foreach ($items as $item)

	<tr>
		<td>{{$item->name}}</td>
		<td>{{$item->price}}</td>
		<td>{{$item->qty}}</td>
	</tr>

@endforeach
	</tbody>

</table>


@stop