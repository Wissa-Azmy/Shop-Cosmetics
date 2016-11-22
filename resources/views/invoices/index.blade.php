@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">

            <div class="modal-content panel panel-default">
                <div class="modal-header">
                    <h3 class="modal-title">Add a New Order</h3>
                </div>

                <div class="modal-body">
                    <form method="post" action="/orders">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-xs-6">
                        {{--<div class="col-md-3 col-md-offset-3">--}}

                            <div class="form-group">
                                <select name="item" class="form-control" id="item">
                                    <option value="0">Item</option>

                                    @f{{-- oreach ($items as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach --}}
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="customer" class="form-control">
                                    <option value="0">Customer</option>

                                   {{--  @foreach ($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                                    @endforeach --}}
                                </select>
                            </div>

                            <div class="form-group form-inline">
                                <p>
                                <select name="port" class="form-control" id="port">
                                    <option value="0">Port</option>
                                    <option value="1">دمياط</option>
                                    <option value="2">اسكندرية</option>
                                    <option value="3">الدخيلة</option>
                                    <option value="1">ابوقير</option>
                                    <option value="2">بورسعيد</option>
                                    <option value="3">السويس</option>
                                    <option value="2">الادبية</option>
                                    <option value="3">النهضة</option>
                                </select>

                                <select name="sub-port" class="form-control" id="sub-port">
                                    <option value="0">SubPort</option>

                                </select>
                                </p>
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control" name="quantity" placeholder="Quantity" id="qty">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="expenses" title="Expenses" placeholder="Expenses" id="expenses">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="total" readonly="readonly" placeholder="Total" id="total">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="location" placeholder="Location">
                            </div>


                            </div>{{--col-xs-6--}}


                            <div class="col-xs-6">
                            <div class="form-group">
                                <select name="supplier" class="form-control" id="supplier">
                                    <option value="0">Supplier</option>

                                </select>
                            </div>



                            <div class="form-group">
                                <select name="type" class="form-control">
                                    <option value="0">Type</option>
                                    <option value="1">اوكراني</option>
                                    <option value="2">امريكي</option>
                                    <option value="3">روماني</option>
                                    <option value="1">ارجنتيني</option>
                                    <option value="2">برازيلي</option>
                                    <option value="3">صربي</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select name="transportation" class="form-control">
                                    <option value="0">Transportation</option>
                                    <option value="1">وصالي معبأ</option>
                                    <option value="2">وصالي صب</option>
                                    <option value="3">أرضه معبأ</option>
                                    <option value="3">أرضه صب</option>
                                </select>
                            </div>

                            <div class="form-group form-inline">
                                <p>
                                    <input type="text" class="form-control" name="price" placeholder="Price" id="price">
                                    <select name="currency" class="form-control">
                                        <option value="0">LE</option>
                                        <option value="1">$</option>
                                    </select>
                                </p>
                            </div>

                            <div class="form-group">
                                <textarea class="" name="notes" style="width: 100%;" rows="6" placeholder="Add your Notes here..."></textarea>
                            </div>
                        </div>{{--col-xs-6--}}
                        </div> {{--row--}}

                        <div class="modal-footer">
                            <input type="submit" value="Add Order" class="btn btn-primary">
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