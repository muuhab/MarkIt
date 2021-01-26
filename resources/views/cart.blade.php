@extends('layouts.master')
@section('content')


<ul class="breadcrumb">
    <li>
        <h3>  <small class="pull-right"> Cart (3 items) </small></h3>
    </li>
</ul>



	<hr class="soft"/>


<form action="/cart/updatequantity/" method="POST">
<div class=" flyout" style=" background-color: #fff; border-radius: 4px; border-collapse: collapse; display: table;  width: 100%;" >
    <div class="mr-1 ml-1 mt-1 mb-1 row " style=" background-color:royalblue" >

            <div class=" image ft-product-image " style=" padding:10px; ">
                <img class="lazy image -loaded" width="60" height="60" src="https://eg.jumia.is/NnYeWb0Q2zMCvWovX0DI9hmxbhc=/fit-in/60x60/filters:fill(white)/product/12/484891/1.jpg?6771" alt="Item Image" >
            </div>

            <div class="col-5" style=" background-color:seagreen; "><h2>Details</h2><h3>gvfrgvdfgvdr</h3><h3>hbvjhvbjhv</h3>

            </div>

<div class="col-1"></div>

            <div class="col-2" style=" background-color:red; "><h2>Quantity</h2><h3>gvfrgvdfgvdr</h3></div>

            <div class="col-2" style=" background-color: black;; "><h2>Price</h2><h3>gvfrgvdfgvdr</h3></div>


    </div>
</div>
</form>

@endsection
