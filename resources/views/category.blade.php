@extends('layouts.home')

@section('title')
<title>{{$cat->title}}</title>
@endsection


@section('content')
<div class="main-3 bg-light">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-8">
      <div class="news-card p-4 mt-5">
          <h2 class="mb-3 border-bottom">{{$cat->title}}</h2>
            <div class="row">
            @foreach($cat->posts as $post)
              <div class="col-md-6">
                <div class="row">
                  <div class="col-12">
                    <img src="/image/post/{{$post->image}}" alt="" width="100%">
                  </div>
                  <div class="col-12">
                    <h2>{{$post->title}}</h2>
                    <span>{{$post->created_at}}</span>
                    <p class="mt-3">{{str_limit($post->body, $limit = 150, $end = "...")}}</p>
                  </div>
                </div>
              </div>
            @endforeach
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="news-card mt-5 p-4">
          <h2>All Categories</h2>
          <ul class="cat-list">
            @foreach($cats as $cat)
            <li class="cat-list-item"><a href="/category/{{$cat->slug}}" class="nav-link">{{$cat->title}}</a></li>
            @endforeach
          </ul>
        </div>

        <div class="news-card mt-5 p-4">
          <h2>Archaive</h2>
          <ul class="cat-list">
            <li class="cat-list-item"><a href="#" class="nav-link">2021</a></li>
            <li class="cat-list-item"><a href="#" class="nav-link">2020</a></li>
            <li class="cat-list-item"><a href="#" class="nav-link">2019</a></li>
            <li class="cat-list-item"><a href="#" class="nav-link">2018</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection