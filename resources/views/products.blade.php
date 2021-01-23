@extends('layouts.master')


@section('content')
	


	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Products Name</li>
    </ul>
	<h3>  <small class="pull-right"> {{count($products)}} products are available </small></h3>	
	<hr class="soft"/>
	

<div id="myTab" class="pull-right">
 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
 <a href="#blockView" data-toggle="tab"><span class="btn btn-large "><i class="icon-th-large"></i></span></a>
</div>
<br class="clr"/>
<div class="tab-content">

	  <!-------------- Start Block View  ------------------------->
			<div class="row">
				@foreach ($products as $product)
				<div class="col-md-4">
					<!-- bbb_deals -->
					<div class="bbb_deals">
						<div class="ribbon ribbon-top-right"><span>60% OFF</span></div>
						<div class="bbb_deals_title">Today's Best Offer</div>
						<div class="bbb_deals_slider_container">
							<div class=" bbb_deals_item">
								<a href="{{ route('products.show',['product'=>$product->id])   }}"><div class="bbb_deals_image"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074043/234.png" alt=""></div></a>
								<div class="bbb_deals_content">
									<div class="bbb_deals_info_line d-flex flex-row justify-content-start">
										<div class="bbb_deals_item_category"><a href="#">Laptops</a></div>
										<div class="bbb_deals_item_price_a ml-auto">{{$product->price}}</div>
									</div>
									<div class="bbb_deals_info_line d-flex flex-row justify-content-start">
										<div class="bbb_deals_item_name">{{$product->name}}</div>
										<div class="bbb_deals_item_price ml-auto">{{$product->price}} $</div>
									</div>
									<div class="available">
										<div class="available_line d-flex flex-row justify-content-start">
											<div class="available_title">Available: <span>6</span></div>
											<div class="sold_title ml-auto">Already sold: <span>28</span></div>
										</div>
										<div class="available_bar"><span style="width:17%"></span></div>
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
</div>
</div>
<!-- MainBody End ============================= -->

	
		@endsection
		
	
