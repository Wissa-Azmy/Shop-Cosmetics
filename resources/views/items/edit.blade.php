@extends('layout')

@section('content')

<form method="POST" action="/items/{{$item->id}}">
{{method_field('PATCH')}}

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
 	<input type="text" name="name" value="{{$item->name}}" class="form-control">
 	<button type="submit" class="btn btn-primary">Edit Item</button>
</div>
</form>

@stop