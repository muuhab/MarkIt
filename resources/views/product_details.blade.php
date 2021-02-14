@extends('layouts.master')
@section('content')


<ul class="breadcrumb">
    <li><a  href="/" >Home</a> <span class="divider">/</span></li>
    <li><a href="{{route('products.index')}}">Products</a> <span class="divider">/</span></li>
    <li><a href="{{ route('cat',['cat'=>$product->cat])}}"  >{{$product->cat}}</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
</ul>


<div class=" flyout " style=" background-color: #fff; border-radius: 4px; " >

	<!--Section: Block Content-->

		<div class="container-fliud" >
			<div class="wrapper row " >


				<div class=" col-md-6  pt-3 pb-3 pr-2 pl-2 "  >

                    <img src="/storage/images/{{$product->product_image}}" style="max-width:400px; max-height:400px; " class="m-auto d-block" alt="No Available Image">

                </div>


				<div class=" pt-3 pb-3 pr-3 pl-3 col-md-6  ">

                    <div class="d-flex flex-row   " style="height:50px">
                        <h3 >{{$product->name}}</h3>
                    </div>

                    <div class="d-flex flex-row mt-4    " style="height:130px">
                        <p >{{$product->about}}</p>
                    </div>

                    <div class="d-flex flex-row mt-3  " style="height:30px">
                        <h4 class="text-danger font-weight-bold">current price: <span>${{$product->price}}</span></h4>
                    </div>

                    <div class="d-flex flex-row mt-3    " style="height:80px">
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">41 reviews</span>
                            <p ><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>

                        </div>
                    </div>

                    @if(!Auth::guest())

                        <div class="mt-3">
                            {!! Form::open(['action' => 'CartController@store' ,'method'=> 'POST']) !!}

                                {!! Form::hidden('item_id', $product->id, ['class'=>'form-control']) !!}
                                {!! Form::hidden('user_id', $user_id = Auth()->user()->id, ['class'=>'form-control'])!!}
                                {{Form::button('Add To Cart   <i class="fas fa-shopping-cart pl-0 "></i>',['type'=>'submit','class'=> 'd-block m-auto btn btn-outline-success w-50 inline'])}}

                            {!!Form::close()!!}
                        </div>

                    @endif

				</div>
			</div>
		</div>
    </div>
@endsection

