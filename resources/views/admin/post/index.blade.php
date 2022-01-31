@extends('layouts.admin')

@section('header')
<div class="page-title-heading">
    <div class="page-title-icon">
        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
        </i>
    </div>
    <div>All Blogs</div>
</div>
<div class="page-title-actions">
  <a href="/admin/post/add" class="btn btn-info">Add New</a>
</div> 
@endsection

@section('content')
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cover</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Category</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td><img src="/image/post/{{$post->image}}" height="60px" width="60px"></td>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            <td>{{$post->category->title}}</td>
            <td>{{$post->created_at}}</td>
            <td>
              <a href="/admin/post/edit/{{$post->id}}" class="btn btn-info">Edit</a>
              <a href="/admin/post/delete/{{$post->id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection