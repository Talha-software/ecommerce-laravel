@extends('admin.maindesign')


<base href='/public'>
@section('editcategory')

@if(session('session_message'))
    <div class="alert alert-success" role="alert">
        {{session('session_message')}}
    </div>
@endif

<div class="container-fluid">
    <h1>Update Category</h1>
    <form action="{{route('admin.updateCategory',$category->id)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="categoryname" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="categoryname" name="category" aria-describedby="emailHelp" value="{{$category->category}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection