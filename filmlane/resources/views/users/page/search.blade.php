@extends('users.layout.app')
@section('content')
<<<<<<< HEAD
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                    <a href="./categories.html">Categories</a>
                    <a href="#">Romance</a>
                    <span>{{ $movies->title}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="anime-details spad">
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
</div>
</div>
</div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="anime__video__player">
                    <video id="player" playsinline controls data-poster="./videos/anime-watch.jpg">
                        <source src="{{ asset('users/videos') }}/{{$movies -> movie_url}}" type="video/mp4" />
                        <!-- Captions are optional -->
                        <track kind="captions" label="English captions" src="#" srclang="en" default />
                    </video>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Reviews</h5>
                    </div>
                    @foreach($comments as $comment)
                    <div class="anime__review__item">
                        <div class="anime__review__item__pic">
                            <img src="{{ asset('users/img/popular/' . $movies->image_url) }}" alt="Movie Image">
                        </div>
                        <div class="anime__review__item__text">
                            <h6>{{ $comment->accounts->username }}<span>  {{$comment->comment_date}}</span></h6>
                            <p>{{$comment -> content}}</p>
                        </div>
                    </div>
                    @endforeach   
                </div>
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Your Comment</h5>
                    </div>
                    <form method="post" action="{{ route('comment')}}">
                        @csrf
                        <input type="hidden" name="movie_id" value="{{ $movies->movie_id }}">
                        <textarea name="content" placeholder="Your Comment" required></textarea>
                        <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                    </form>
                    
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
</div>
</div>
        </div>
    </div>
</section>
=======

<div class="search-results">
    @if ($movies->isEmpty())
        <p>No movies found.</p>
    @else
    <section class="product spad">
        <div class="container">
            <div class="row">
    <div class="col-lg-12">
        <div class="trending__product">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="section-title">
                        <h4>Trending Now</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4">
                    <div class="btn__all">
                        <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($movies as $movie)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="users/img/popular/{{ $movie->image_url }}">
                            <div class="ep">{{ $movie->quality }}</div>
                            <div class="comment"><i class="fa fa-comments"></i>{{ $movie->quality }}</div>
                            <div class="view"><i class="fa fa-eye"></i>{{ $movie->view }}</div>
                        </div>
                        <div class="product__item__text">
                            <ul>
                                <li>Active</li>
                                <li>Movie</li>
                            </ul>
                            <h5><a href="{{ route('movies.show', ['id' => $movie->movie_id]) }}">Detail</a>
                            </h5>
                        </div>
                    </div>
                </div>
                
                @endforeach
                <!-- Hiển thị liên kết phân trang -->
                
            </div>
        </div>
        </div>
    </div>
    @endif
</div>

>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
@endsection