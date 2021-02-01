@extends('layouts.master')
@section('content')


<ul class="breadcrumb">
    <li>
        <h3>  <small class="pull-right text-dark"> {{count($products)}} products are available </small></h3>
    </li>
</ul>

	<hr class="soft"/>

<div class=" flyout" style=" background-color: #fff; border-radius: 4px; " >

    <div class="mr-2 ml-2">


    <div class="" style="overflow:hidden;">

        <!-------------- Start Block View  ------------------------->
                <div class="row">

                    @foreach ($products as $product)
                    <div class="col-md-4 mt-2 mb-3">
                        <!-- bbb_deals -->
                        <div class="bbb_deals pt-5 " style="height:450px;">

                            <div class="bbb_deals_slider_container">
                                <div class=" bbb_deals_item">

                                    <a href="{{ route('products.show',['product'=>$product->id])}}"  style="text-decoration:none; " >
                                        <div class=" row"    >
                                            <img src="{{$product->product_image}}" style="height:220px;" class="m-auto d-block" alt="No Available Image">
                                        </div>
                                    </a>



                                        <div class="d-flex flex-row mt-4  justify-content-start" style="height:50px">
                                            <div class=""><a style="text-decoration: none;" href="#">{{$product->name}}</a></div>
                                        </div>

                                        <div class=" d-flex flex-row mt-1 row justify-content-start">
                                            <div class="col-8 "><a style="text-decoration:none;"  href="{{ route('cat',['cat'=>$product->cat])}}" ><h6 class=" text-dark" >{{$product->cat}}</h6></a></div>
                                            <div class="col-3"><h6 class=" text-dark">{{$product->price}}</h6></div>
                                        </div>


                                        @if(!Auth::guest())

                                                <div class="mt-3">
                                                    {!! Form::open(['action' => 'CartController@store' ,'method'=> 'POST']) !!}

                                                        {!! Form::hidden('item_id', $product->id, ['class'=>'form-control']) !!}
                                                        {!! Form::hidden('user_id', $user_id = Auth()->user()->id, ['class'=>'form-control'])!!}

                                                        {{Form::button('Add To Cart   <i class="fas fa-shopping-cart pl-0 "></i>',['type'=>'submit','class'=> 'btn btn-primary w-100 inline'])}}

                                                    {!!Form::close()!!}
                                                </div>

                                        @endif


                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
        <!-------------- End Block View  ------------------------->
    </div>

			<br class="clr"/>

</div>
</div>

@endsection


