@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="card card-table-border-none" id="recent-orders">
    <div class="card-header justify-content-between">
      <h2>Recent Orders</h2>
      <div class="date-range-report ">
        <span></span>
      </div>
    </div>
    <div class="card-body pt-0 pb-5">
      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Product Name</th>
            <th class="d-none d-md-table-cell">Units</th>
            <th class="d-none d-md-table-cell">Order Date</th>
            <th class="d-none d-md-table-cell">Order Cost</th>
            <th>Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                
          <tr>
            <td >24541</td>
            <td >
              <p class="text-dark" href=""> {{$product->name}}</p>
            </td>
            <td class="d-none d-md-table-cell">1 Unit</td>
            <td class="d-none d-md-table-cell">{{$product->created_at}}</td>
            <td class="d-none d-md-table-cell">${{$product->price}}</td>
            <td >
              <span class="badge badge-success">Available</span>
            </td>
            <td class="text-right">
              <div class="dropdown show d-inline-block widget-dropdown">
                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                  <li class="dropdown-item">
                    <a href="{{route('products.show',['product'=>$product->id])}}">View</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="{{route('products.destroy',['product'=>$product->id])}}">Remove</a>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
@endsection