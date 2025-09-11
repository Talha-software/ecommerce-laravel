@extends('admin.maindesign')


<base href='/public'>
@section('editproduct')

@if(session('session_message'))
    <div class="alert alert-success" role="alert">
        {{session('session_message')}}
    </div>
@endif

<div class="container-fluid">
    <h1>Update Product</h1>
    <form action="{{route('admin.updateProduct',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="categoryname" class="form-label">Product Name</label>
            <input type="text" class="form-control"  name="product_name" aria-describedby="emailHelp" value="{{$product->product_name}}">
            <label for="categoryname" class="form-label">Product Price</label>
            <input type="text" class="form-control"  name="product_price" aria-describedby="emailHelp" value="{{$product->product_price}}">
            <label for="categoryname" class="form-label">Product Description</label>
            <input type="text" class="form-control"  name="product_description" aria-describedby="emailHelp" value="{{$product->product_description}}">
            <label for="categoryname" class="form-label">Product Quantity</label>
            <input type="text" class="form-control"  name="product_quantity" aria-describedby="emailHelp" value="{{$product->product_quantity}}">
            <label for="categoryname" class="form-label">Product Image</label>
            <image src="{{asset('product_images/'.$product->product_image)}}" alt="" width="100px">
            <input type="file" class="form-control"  name="product_image" aria-describedby="emailHelp" value="{{$product->product_image}}">

            <select name="product_category" class="form-select" aria-label="Default select example">
                <option selected>Select Category</option>
                @foreach($categories as $category)
                <option value="{{$category->category}}">{{$category->category}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection