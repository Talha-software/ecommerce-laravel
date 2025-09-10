@extends('admin.maindesign')



@section('category')

@if(session('session_message'))
    <div class="alert alert-success" role="alert">
        {{session('session_message')}}
    </div>
@endif

<div class="container-fluid">
    <h1>Add Category</h1>
    <form action="{{route('admin.postaddcategory')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="categoryname" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="categoryname" name="addCategory" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



@endsection