@extends('layouts.master')
@section('content')


<ul class="breadcrumb">
    <li><a  href="/" >Home</a> <span class="divider">/</span></li>
    <li><a href="{{route('products.index')}}">Products</a> <span class="divider">/</span></li>
    <li><a href="{{ route('cat',['cat'=>$products->cat])}}"  >{{$products->cat}}</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
</ul>


<div class=" flyout " style=" background-color: #fff; border-radius: 4px; " >

	<!--Section: Block Content-->


		<div class="container-fliud" >
			<div class="wrapper row" >


				<div class="preview col-md-6 " >

                         <div class=" active row mt-4" id="pic-1" >

                            <img style="max-width:300px; max-height:300px; " class=" mx-auto d-block " src="{{$products->product_image}}" />
                        </div>



                </div>


				<div class="details col-md-6">
					<h3 class="product-title">{{$products->name}}</h3>
					<div class="rating">
						<div class="stars">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<span class="review-no">41 reviews</span>
					</div>
					<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
					<h4 class="price">current price: <span>${{$products->price}}</span></h4>
					<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
					<h5 class="sizes">sizes:
						<span class="size" data-toggle="tooltip" title="small">s</span>
						<span class="size" data-toggle="tooltip" title="medium">m</span>
						<span class="size" data-toggle="tooltip" title="large">l</span>
						<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
					</h5>
					<h5 class="colors">colors:
						<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
						<span class="color green"></span>
						<span class="color blue"></span>
					</h5>
					<div class="action">
						<button class="add-to-cart btn btn-default" type="button">add to cart</button>
						<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection

