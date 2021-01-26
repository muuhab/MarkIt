@extends('layouts.master')
@section('content')


<ul class="breadcrumb">
    <li>
        <h3>  <small class="pull-right"> {{count($products)}} products are available </small></h3>
    </li>
</ul>

	<hr class="soft"/>

<div class=" flyout" style=" background-color: #fff; border-radius: 4px; " >

    <div class="mr-2 ml-2">


    <div class="tab-content">

        <!-------------- Start Block View  ------------------------->
                <div class="row">

                    @foreach ($products as $product)
                    <div class="col-md-4 mt-2 mb-3">
                        <!-- bbb_deals -->
                        <div class="bbb_deals " style="height:450px">


                            <div class="bbb_deals_slider_container">
                                <div class=" bbb_deals_item">

                                    <a href="{{ route('products.show',['product'=>$product->id])}}"  style="text-decoration:none; " >
                                        <div class=" row"   >
                                            <img src="{{$product->product_image}}" style="height:220px;" alt="No Available Image">
                                        </div>
                                    </a>


                                    <div class="bbb_deals_content ">
                                        <div class=" d-flex flex-row row justify-content-start">
                                            <div class="col-8"><small >{{$product->cat}}</small></div>
                                            <div class="col-3">{{$product->price}}</div>
                                        </div>

                                        <div class="d-flex flex-row justify-content-start">
                                            <div class=""><a style="text-decoration: none;" href="#">{{$product->name}}</a></div>
                                        </div>

                                        @if(!Auth::guest())
                                        <div class="">
                                            {!! Form::open(['action' => 'CartController@store' ,'method'=> 'POST']) !!}

                                                {!! Form::hidden('item_id', $product->id, ['class'=>'form-control']) !!}
                                                {!! Form::hidden('user_id', $user_id = Auth()->user()->id, ['class'=>'form-control'])!!}

                                                {{Form::button('Add To Cart   <i class="fas fa-shopping-cart pl-0 "></i>',['type'=>'submit','class'=> 'btn btn-primary w-100 inline '])}}


                                            {!!Form::close()!!}
                                        </div>
                                        @endif

                                    </div>
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


