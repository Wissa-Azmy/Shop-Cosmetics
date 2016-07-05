@extends('layout')


@section('content')

	<div>
		<h3>Invoice Code: {{$invoice->id}}</h3>
		<ul>
		@foreach ($invoice->items as $item)
				
			<li>{{$item->name}}</li>

			
		@endforeach
		</ul>
	</div>

@stop