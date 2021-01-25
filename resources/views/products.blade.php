@extends('layouts.master')


@section('content')

<div class=" flyout" style=" background-color: #fff; border-radius: 4px; padding:10px;" >

	<div class="span9">


	<h3>  <small class="pull-right"> <span style="font-weight: bold">{{count($products)}}</span> products are available </small></h3>
	<hr class="soft"/>




    <div class="tab-content">

        <!-------------- Start Block View  ------------------------->
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-md-4">
                        <!-- bbb_deals -->
                        <div class="bbb_deals m-2" style="height:450px">

                            <div class="ribbon ribbon-top-right  " >
                                <span ">40% OFF</span>
                            </div>
                            <div class="bbb_deals_slider_container">
                                <div class=" bbb_deals_item">
                                    <a href="{{ route('products.show',['product'=>$product->id])}}"  style="text-decoration:none; " >
                                        <div class="bbb_deals_image"  style="height:250px;  " >
                                            <img src="{{$product->product_image}}" alt="No Available Image">
                                        </div>
                                    </a>
                                    <div class="bbb_deals_content">
                                        <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                            <div class="bbb_deals_item_category"><a href="#">Laptops</a></div>
                                            <div class="bbb_deals_item_price_a ml-auto">{{$product->price}}</div>
                                        </div>
                                        <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                            <div class="bbb_deals_item_name">{{$product->name}}</div>
                                            <div class="bbb_deals_item_price ml-auto">{{$product->price}} $</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        <!-------------- End Block View  ------------------------->
    </div>
	{{-- <a href="compair.html" class="btn btn-large pull-right">Compair Product</a> --}}
	<div class="pagination">
			{{-- <ul>
			<li><a href="#">&lsaquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">&rsaquo;</a></li>
			</ul> --}}
			{{$products->links()}}
	</div>
			<br class="clr"/>
</div>
</div>
@endsection