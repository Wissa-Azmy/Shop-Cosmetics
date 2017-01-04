@extends('layouts.app')

@section('content')

<style type="text/css">
	.input {display: block; padding: 0; margin: 0; border: 0; width: 100%;}
	/*.td {margin: 0; padding: 0;}*/
</style>

<div class="row">
	<div class="col-md-6 col-md-offset-3">

<div class="modal-content panel panel-default">
                <div class="modal-header">
                    <h3 class="modal-title">Add a New Invoice</h3>
                </div>

                <div class="modal-body">
                    <form method="post" action="#">
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
	                            <div class="form-group">
	                            	<input type="Date" name="invoice-date">
	                            </div>

                            </div>{{--col-xs-6--}}


                            <div class="col-xs-6">
                            <div class="form-group">
                                <textarea class="" name="notes" style="width: 100%;" rows="6" placeholder="Add your Notes here..."></textarea>
                            </div>
                        </div>{{--col-xs-6--}}
                        <div class="col-md-12">

                        <table class="table" id="myTable">
		<thead>
			<tr>
				<th>Item</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Discount</th>
				<th>Total</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>

		<tr class="input-row">
			<td style="width: 35%; margin: 0; padding: 0;"><input type="text" class="form-control input" name="item" id="item"></td>
			<td style="margin: 0; padding: 0;"><input type="text" class="form-control input qty" name="quantity" id="qty"></td>
			<td style="margin: 0; padding: 0;"><input type="text" class="form-control input price" name="price" id="price"></td>
			<td style="margin: 0; padding: 0;"><input type="text" class="form-control input discount" name="discount" id="discount"></td>
			<td style="margin: 0; padding: 0;"><input type="text" class="form-control input amount" name="total" readonly="readonly" id="total"></td>
			
			{{-- <td align="center"><a href="#"><span class="glyphicon glyphicon-remove btn-reset" style="color: red;"></span></a></td> --}}
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td align="center"><a href="#"><span class="glyphicon glyphicon-plus add-more-items" style="color: green;"></span></a></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td>Sub Total</td>
			<td style="margin: 0; padding: 0;"><input type="text" class="form-control input subtotal" name="subtotal" readonly="readonly" id="subtotal"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td>Discount</td>
			<td style="margin: 0; padding: 0;"><input type="text" class="form-control input" name="totalDiscount" readonly="readonly" id="totalDiscount"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td>G. Total</td>
			<td style="margin: 0; padding: 0;"><input type="text" class="form-control input" name="grandTotal" readonly="readonly" id="grandTotal"></td>
			<td></td>
		</tr>

		</tbody>

	</table>
							
                        </div>

                        </div> {{--row--}}

                        <div class="modal-footer">
                            <input type="button" value="Cancel" class="btn btn-danger form-reset">
                            <input type="submit" value="Add Invoice" class="btn btn-primary">
                        </div>

                    </form>

                </div> {{--modal body--}}

</div> {{--Modal content--}}




<h1><b>All Invoices</b></h1>

	<table class="table">
		<thead>
			<tr>
				<th>Date</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Customer</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
	@foreach ($invoices as $invoice)

		<tr>
			<td><a href="/invoices/{{$invoice->id}}">{{$invoice->created_at}}</a></td>
			<td>{{$invoice->unit_price}}</td>
			<td>{{$invoice->quantity}}</td>
			<td>{{$invoice->customer->name}}</td>
			<td><a href="/invoices/{{$invoice->id}}/edit" class="btn btn-primary">Edit</a></td>
		</tr>

	@endforeach
		</tbody>

	</table>
	</div>
</div>

@stop

@section('script')
<script type="text/javascript">
	
	var template = '<tr class="input-row">'+
                        '<td style="margin: 0; padding: 0;"><input type="text" class="form-control input" name="item" id="item"></td>'+
                        '<td style="margin: 0; padding: 0;"><input type="text" class="form-control input qty" name="quantity" id="qty"></td>'+
                        '<td style="margin: 0; padding: 0;"><input type="text" class="form-control input price" name="price" id="price"></td>'+
                        '<td style="margin: 0; padding: 0;"><input type="text" class="form-control input discount" name="discount" id="discount"></td>'+
                        '<td style="margin: 0; padding: 0;"><input type="text" class="form-control input amount" name="total" readonly="readonly" id="total"></td>'+
                        '<td align="center"><a href="#"><span class="glyphicon glyphicon-remove btn-remove" style="color: red;"></span></a></td>'+
                    '</tr>'

    // $('.add-more-items').on('click',function(e) // DOESN'T WITH MULTIBLE CLASSES ACROSS THE DOCUMENT
    $(document).on('click','.add-more-items', function(e){
    	e.preventDefault();
    	$(this).parents('tr').before(template);
    })

    $(document).on('click','.btn-remove', function(e){
    	e.preventDefault();
    	$(this).parents('tr').remove();
    })

/* RESET THE CELLS OF THE FIRST ITEM ROW */
    $(".btn-reset").click(function() {
    	$(this).closest('tr').find("input[type=text], textarea").val("");
	});

	$(".form-reset").click(function() {
    	$(this).closest('form').find("input[type=text], textarea, input[type=Date]").val("");
	});

    	
    // input.change(function(){
    // 	var qtyValue = $(this).parents('tr').children('.qty').val();
    // 	var quantity = (isNaN(parseFloat(qtyValue))) ? 0 : parseFloat(qtyValue);



/* FORM CALCULATION */

    function update_amounts()
{
    var sum = 0.0;

    $('#myTable > tbody  > tr.input-row').each(function() {
    	
        var qty = $(this).find('.qty').val(),
        
        price = $(this).find('.price').val(),
        
        discount = $(this).find('.discount').val(),

        unit = (100 - discount) / 100;
        amount = (qty*price) * unit;
        
        sum+=amount;
        $(this).find('.amount').val(amount);
    //just update the subtotal to sum          
        $('#subtotal').val(sum);
    }); 
}

$(document).on('change', '.input', function() {
    update_amounts();
});

</script>
@stop