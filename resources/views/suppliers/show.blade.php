@extends('layouts.app')


@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">

	            <div class="modal-content panel panel-default">
                <div class="modal-header">
                    <h3 class="modal-title">Add a New Purchase</h3>
                </div>

                <div class="modal-body">
                    <form method="post" action="/orders">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-xs-6">

                            <div class="form-group">
                                <select name="customer" class="form-control">
                                    <option value="0">Customer</option>

                                   {{--  @foreach ($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                                    @endforeach --}}
                                </select>
                            </div>

                            </div>{{--col-xs-6--}}


                            <div class="col-xs-6">
                            <div class="form-group">
                                <textarea class="" name="notes" style="width: 100%;" rows="6" placeholder="Add your Notes here..."></textarea>
                            </div>
                        </div>{{--col-xs-6--}}
                        <div class="col-md-12">
							<div class="form-group form-inline item-add">
                                <input type="text" class="form-control" style="width: 45%;" name="item" placeholder="Item" id="item">
                           
                                <input type="text" class="form-control" style="width: 15%;" name="quantity" placeholder="Quantity" id="qty">

                                <input type="text" class="form-control" style="width: 15%;" name="price" placeholder="Price" id="price">
                                <input type="text" class="form-control" style="width: 19%;" name="total" readonly="readonly" placeholder="Total" id="total">&nbsp&nbsp&nbsp&nbsp
                                <a href="#"><span class="glyphicon glyphicon-remove btn-remove" style="color: red;"></span></a>
                            </div>
						<a href="#" class="btn btn-xs btn-info" id="add-more-items">Add More</a>

                        </div>

                        </div> {{--row--}}

                        <div class="modal-footer">
                            <input type="submit" value="Add Purchase" class="btn btn-primary">
                        </div>

                    </form>
                </div> {{--modal body--}}


            </div> {{--Modal content--}}



		@if (count($errors))
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif

		<hr>

		<h1>{{$supplier->name}}</h1>

		<table class="table">
		<thead>
			<tr>
				<th>Title</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Added By</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
	@foreach ($supplier->items as $item)

		<tr>
			<td>{{$item->name}}</td>
			<td>{{$item->price}}</td>
			<td>{{$item->qty}}</td>
			<td>{{$item->user->name}}</td>
			<td><a href="/items/{{$item->id}}/edit" class="btn btn-primary">Edit</a></td>
		</tr>

	@endforeach
		</tbody>

	</table>

		
	</div> {{-- col-md-6 --}}
</div> {{-- The First Row --}}

@stop

@section('script')
<script type="text/javascript">
	
	var template = '<div class="form-group form-inline item-add">'+
                                '<input type="text" class="form-control" style="width: 45%;" name="item" placeholder="Item" id="item"> '+
                           
                                '<input type="text" class="form-control" style="width: 15%;" name="quantity" placeholder="Quantity" id="qty"> '+

                                '<input type="text" class="form-control" style="width: 15%;" name="price" placeholder="Price" id="price"> '+
                                '<input type="text" class="form-control" style="width: 19%;" name="total" readonly="readonly" placeholder="Total" id="total"> &nbsp&nbsp&nbsp&nbsp'+
                                '<a href="#"><span class="glyphicon glyphicon-remove btn-remove" style="color: red;"></span></a>'+
                            '</div>'

    $('#add-more-items').on('click',function(e) {
    		e.preventDefault();
    		$(this).before(template);
    })

    $(document).on('click','.btn-remove', function(e){
    	e.preventDefault();
    	$(this).parents('.item-add').remove();
    })
</script>
@stop