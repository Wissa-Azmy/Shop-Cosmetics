@extends('layout')


@section('content')

	@foreach ($suppliers as $supplier)

		<a href="/suppliers/{{$supplier->id}}"> {{$supplier->name}} </a>
	@endforeach
@stop