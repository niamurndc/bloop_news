@extends('layouts.home')

@section('title')
<title>Bloop News</title>
@endsection


@section('content')
<div class="primeum py-4">
  <div class="container py-5" style="background:url('/image/post/{{$post->image}}'); height: 250px;">
    <h1>{{$post->title}}</h1>
    <h5>{{$post->created_at}}</h5>
  </div>
</div>

<div class="main">
  <div class="container py-4">
    {{$post->body}}
  </div>
</div>

<div class="main bg-light">
  <div class="container py-5">
    <div class="news-card p-4">
      <h2>Related Posts</h2>
        <div class="row">
          @foreach($posts as $post)
            <div class="col-md-4 mt-4">
              <div class="row">
                <div class="col-5">
                  <img src="/image/post/{{$post->image}}" alt="" width="100%">
                </div>
                <div class="col-7">
                  <h5>{{$post->title}}</h5>
                  <span>{{$post->created_at}}</span>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    </div>
  </div>
</div>







@endsection