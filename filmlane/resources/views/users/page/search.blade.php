@extends('users.layout.app')
@section('content')

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

@endsection