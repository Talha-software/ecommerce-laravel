@extends('admin.maindesign')



@section('addproducts')

@if(session('session_message'))
    <div class="alert alert-success" role="alert">
        {{session('session_message')}}
    </div>
@endif

<div class="container-fluid">
    <h1>Add Products</h1>
    <form action="{{route('admin.postAddProducts')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="categoryname" class="form-label">Product Name</label>
            <input type="text" class="form-control"  name="product_name" aria-describedby="emailHelp">
            <label for="categoryname" class="form-label">Product Price</label>
            <input type="text" class="form-control"  name="product_price" aria-describedby="emailHelp">
            <label for="categoryname" class="form-label">Product Description</label>
            <input type="text" class="form-control"  name="product_description" aria-describedby="emailHelp">
            <label for="categoryname" class="form-label">Product Quantity</label>
            <input type="text" class="form-control"  name="product_quantity" aria-describedby="emailHelp">
            <label for="categoryname" class="form-label">Product Image</label>
            <input type="file" class="form-control"  name="product_image" aria-describedby="emailHelp">

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