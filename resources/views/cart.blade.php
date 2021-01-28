@extends('layouts.master')
@section('content')


<ul class="breadcrumb">
    <li>
        <h3>  <small class="pull-right"> Cart (3 items) </small></h3>
    </li>
</ul>


	<hr class="soft"/>

<div class=" mb-3 row" style=" width: 100%; " >
    <div class="col-8" style=" width: 53.47%; color: #8e8e93; font-weight: 500; font-size: 14px; line-height: 1.14; border-collapse: collapse;">ITEM</div>
    <div class="col-2" style=" width: 53.47%; color: #8e8e93; font-weight: 500; font-size: 14px; line-height: 1.14; border-collapse: collapse;">Quantity</div>
    <div class="col-2" style=" width: 53.47%; color: #8e8e93; font-weight: 500; font-size: 14px; line-height: 1.14; border-collapse: collapse;">TOTAL PRICE</div>
</div>

    @foreach ($orders as $order)


    <div class=" mb-2 flyout" style=" background-color: #fff; border-radius: 4px; border-collapse: collapse; display: table;  width: 100%;" >
        <div class="mr-1 ml-1 mt-1 mb-1 row "  >


            <a href="{{ route('products.show',['product'=>$order->item_id])}}" >
                <div class=" image ft-product-image " style=" padding:10px; ">
                <img class="lazy image -loaded" width="60" height="60" src="{{$order->products->product_image}}" alt="Item Image" >
                </div>
            </a>


            <div class="col-6" style=" padding:10px;  ">
                <a  href="{{ route('products.show',['product'=>$order->item_id])}}"  style="color:black; font-size: 16px; font-weight: 500; line-height: 1.25; text-decoration:none;" >{{$order->products->name}}</a>
                {!! Form::open(['action'=> ['CartController@destroy', $order->id],'method'=> 'POST']) !!}
                {!! Form::hidden('id', $order->id, ['class'=>'form-control']) !!}
                {{Form::submit('Delete', ['class'=> 'btn btn-danger mt-2', 'style'=>'margin-left:70%;'])}}
                {!!Form::close()!!}
            </div>

            <div class="col-1"></div>

            <div class="form-group col-2 "  >

                {!! Form::open(['route' => 'UpdateQty','method'=> 'POST']) !!}
                {!! Form::hidden('id', $order->id, ['class'=>'form-control']) !!}
                {{Form::number('quantity','1',['class'=> 'form-control w-75 row','placeholder'=> 'Quantity Number'])}}
                {{Form::submit('Update',['class'=> 'btn btn-light', 'style'=>'position: absolute; left:0;'])}}
                {!!Form::close()!!}

            </div>


            <div class="col-1">
               <h3>78788</h3>
            </div>

        </div>
    </div>

@endforeach

@endsection
