<!-- resources/views/movies/index.blade.php -->
@extends('users.layout.app')
@section('content')

<section class="anime-details spad">
    <div class="container">
<div class="anime__details__content">
    <div class="row">
        <div class="col-lg-3">
            <div class="product__item__pic set-bg" data-setbg="{{ asset('users/img/popular/' . $movie->image_url) }}" alt="{{ $movie->title }}">
                <div class="comment"><i class="fa fa-comments"></i> 11</div>
                <div class="view"><i class="fa fa-eye"></i> 9141</div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="anime__details__text">
                <div class="anime__details__title">
                    <h3>{{ $movie->title }}</h3>
                    <span>{{ $movie->director}}</span>
                </div>
                <div class="anime__details__rating">
                    <div class="rating">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                    <span>1.029 Votes</span>
                </div>
                <p>{{ $movie->description}}</p>
                <div class="anime__details__widget">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li><span>Type:</span> TV Series</li>
                                <li><span>Studios:</span> Lerche</li>
                                <li><span>Date aired:</span>{{ $movie->year_manufacture}}</li>
                                <li><span>Status:</span>{{ $movie->status}}</li>
                                <li><span>Genre:</span> Action, Adventure, Fantasy, Magic</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li><span>Scores:</span> 7.31 / 1,515</li>
                                <li><span>Rating:</span> 8.5 / 161 times</li>
                                <li><span>Duration:</span> 24 min/ep</li>
                                <li><span>Quality:</span>{{ $movie->quality}}</li>
                                <li><span>Views:</span>{{ $movie->view}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="anime__details__btn">
                    <a href="#" class="follow-btn" style="margin-right: 0px"><i class="fa fa-heart-o"></i></a>
                    <a href="{{ route('movies.watch', ['id' => $movie->movie_id]) }}" class="watch-btn"><span>Watch Now</span></a>
                    <a href="{{ route('trailler.watch', ['id' => $movie->movie_id]) }}" class="watch-btn"><span>Trailler</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    @endsection