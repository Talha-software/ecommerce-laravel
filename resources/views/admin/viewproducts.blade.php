@extends('admin.maindesign')


@section('viewproducts')


@if(session('session_message'))
    <div class="alert alert-success" role="alert">
        {{session('session_message')}}
    </div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Product description</th>
        <th scope="col">Product quantity</th>
      <th scope="col">Product price</th>
      <th scope="col">Product image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
        <th scope="row">{{$product->product_name}}</th>
        <td>{{$product->product_description}}</td>
        <td>{{$product->product_quantity}}</td>
        <td>{{$product->product_price}}</td>
        <td><img src="{{asset('product_images/'.$product->product_image)}}" alt="" width="100px"></td>
        <td>
        <a href="{{route('admin.productEdit',$product->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('admin.deleteproduct',$product->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete this category?')";>Delete</a>
        </td> 
    </tr>
    @endforeach


    {{$products->links()}}
  </tbody>


@endsection