@extends('admin.maindesign')


@section('viewcategory')


@if(session('session_message'))
    <div class="alert alert-success" role="alert">
        {{session('session_message')}}
    </div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
        <td>{{$category->category}}</td>
        <td>
        <a href="{{route('admin.categoryEdit',$category->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('admin.categoryDelete',$category->id)}}" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete this category?')";>Delete</a>
        </td> 
    </tr>
    @endforeach
  </tbody>


@endsection