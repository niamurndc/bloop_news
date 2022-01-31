@extends('layouts.home')

@section('title')
<title>Bloop News</title>
@endsection


@section('content')
<div class="bg-cover">
  <div class="container">
    <div class="recent-news">
      @foreach($headposts as $post)
        @if($loop->first)
          <div class="news-grid grid-1" style="background: url('/image/post/{{$post->image}}');">
            <a href="/post/{{$post->slug}}">
              <h2>{{$post->title}}</h2>
              <span>{{$post->created_at}}</span>
            </a>
          </div>       
        @else
          <div class="news-grid" style="background: url('/image/post/{{$post->image}}');">
            <a href="/post/{{$post->slug}}">
              <h3>{{$post->title}}</h3>
              <span>{{$post->created_at}}</span>
            </a>
          </div>          
        @endif
      @endforeach
    </div>
  </div>
</div>

<div class="main bg-light">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-8">
        <div class="news-card p-4">
          <h2>City Building</h2>
            <div class="row">
              @foreach($posts1 as $post)
                @if($loop->first)
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-6">
                        <img src="/image/post/{{$post->image}}" alt="" width="100%">
                      </div>
                      <div class="col-6">
                        <h2>{{$post->title}}</h2>
                        <span>{{$post->created_at}}</span>
                        <p class="mt-3">{{str_limit($post->body, $limit = 150, $end = "...")}}</p>
                      </div>
                    </div>
                  </div>
                @else
                  <div class="col-md-6 mt-4">
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
                @endif
              @endforeach
            </div>
        </div>
        <div class="news-card p-4 mt-5">
          <h2>Massive Construction</h2>
            <div class="row">
              @foreach($posts2 as $post)
                @if($loop->first)
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
                  <div class="col-md-6">
                @else
                    <div class="col-md-12 mb-4">
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
                  @endif
                @endforeach
              </div>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="news-card p-4">
          <h2>Popular Post</h2>
          <div class="row">
            <div class="col-md-12 mb-4">
              <div class="row">
                <div class="col-5">
                  <img src="/image/news9.jpg" alt="" width="100%">
                </div>
                <div class="col-7">
                  <h5>This is first news for category</h5>
                  <span>10 sep 2020</span>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-4">
              <div class="row">
                <div class="col-5">
                  <img src="/image/news8.jpg" alt="" width="100%">
                </div>
                <div class="col-7">
                  <h5>This is first news for category</h5>
                  <span>10 sep 2020</span>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-4">
              <div class="row">
                <div class="col-5">
                  <img src="/image/news7.jpg" alt="" width="100%">
                </div>
                <div class="col-7">
                  <h5>This is first news for category</h5>
                  <span>10 sep 2020</span>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-4">
              <div class="row">
                <div class="col-5">
                  <img src="/image/news10.jpg" alt="" width="100%">
                </div>
                <div class="col-7">
                  <h5>This is first news for category</h5>
                  <span>10 sep 2020</span>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-4">
              <div class="row">
                <div class="col-5">
                  <img src="/image/news6.jpg" alt="" width="100%">
                </div>
                <div class="col-7">
                  <h5>This is first news for category</h5>
                  <span>10 sep 2020</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="news-card mt-5 p-4">
          <h2>Stay Connected</h2>
          <ul class="cat-list">
            <li class="cat-list-item"><a href="#" class="nav-link"><i class="fa fa-facebook-square pr-2"></i> Facebook</a></li>
            <li class="cat-list-item"><a href="#" class="nav-link"><i class="fa fa-twitter pr-2"></i> Twitter</a></li>
            <li class="cat-list-item"><a href="#" class="nav-link"><i class="fa fa-instagram pr-2"></i> Instagram</a></li>
            <li class="cat-list-item"><a href="#" class="nav-link"><i class="fa fa-linkedin pr-2"></i> Linkedin</a></li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>
</div>

<div class="primeum">
  <div class="container">
    <div class="p-4 mt-5">
      <h2>Massive Construction</h2>
        <div class="row">
          @foreach($posts3 as $post)
            @if($loop->first)
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
              <div class="col-md-6">
            @else
                <div class="col-md-12 mb-4">
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
              @endif
            @endforeach
          </div>
        </div>
    </div>
  </div>
</div>

<div class="main-2 bg-light">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-8">
      <div class="news-card p-4 mt-5">
          <h2>Massive Tower</h2>
            <div class="row">
            @foreach($posts4 as $post)
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
          <h2>Building</h2>
          <div class="row">
          @foreach($posts as $post)
            <div class="col-md-12 mb-4">
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
  </div>
</div>


<div class="main-3 bg-light">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-8">
      <div class="news-card p-4 mt-5">
          <h2 class="mb-3 border-bottom">Latest News</h2>
            <div class="row">
            @foreach($recentposts as $post)
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