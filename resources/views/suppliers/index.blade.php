@extends('layout')


@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">

<ul>
	@foreach ($suppliers as $supplier)

		<li><a href="/suppliers/{{$supplier->id}}"> {{$supplier->name}} </a></li>

	@endforeach
</ul>

</div>
	</div>
@stop