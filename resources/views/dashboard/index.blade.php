                                    <!-- table -->

@extends('layouts.dashboard')

@section('content')
<div class="container">


    <a href="{{ route('dashboard.create')}}" class="btn btn-dark mt-2 ">Add new product</a>
    <a href="/home" class="btn btn-dark mt-2" style="position: absolute; right:20%" >Return</a>
    <div class="row justify-content-center " style="width:fit-content;">

        <div class="card bg-dark text-light mt-3 mb-5 ">

          <div class="card-body ">

                   @if(count($products) > 0)
                   <div>
                      <table class="table table-striped table-dark  " >
                         <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Product Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                          </tr>

                            @foreach ($products as $product)
                              <tr>
                                <th >{{$product->name}}</th>
                                <th>{{$product->cat}}</th>
                                <th><img style=" width: 70px; height: 70px;" alt="No Available Image" src="/storage/images/{{$product->product_image}}" ></th>
                                <th class="col-6">{{$product->about}}</th>
                                <th>{{$product->price}} EGP</th>

                                <th > <a href="{{ route('dashboard.edit',['dashboard'=>$product->id])}}" class="btn btn-light">Edit</a></th>

                                <th>
                                    {!!Form::open(['action'=> ['DashboardController@destroy', $product->id],'method' => 'POST', 'class' => 'pull-right' ])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </th>


                           </tr>
                       @endforeach
              </table>
             @else
             <p> you have no posts</p>
             @endif
           </div>

       </div>
      </div>
   </div>
@endsection
