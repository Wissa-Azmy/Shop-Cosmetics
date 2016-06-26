@extends('layout')


@section('content')

	<h1>{{$supplier->name}}</h1>

	<ul>
		@foreach ($supplier->items as $item)
			<li>{{$item->name}}</li>
		@endforeach
	</ul>

@stop