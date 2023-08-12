
<!-- resources/views/movies/index.blade.php -->
@extends('users.layout.app')
@section('content')

@if(isset($message))
    <div class="alert">
        <p>{{ $message }}</p>
    </div>
@endif

<!-- Nội dung trang web -->

    <!-- Product Section Begin -->
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
                                            <li>{{ $movie->category->category_name }}</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="{{ route('movies.show', ['id' => $movie->movie_id]) }}">Detail</a>
                                        </h5>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            @endforeach
                            <!-- Hiển thị liên kết phân trang -->
                            @if ($lastPage > 1)
                            <div style="width: 130px; height: 34px; text-align:right; background-color:#e50914">
                                <ul style="padding-top:5px" class="pagination">
                                    <li style="padding: 0 7px ; color:#fff">Page</li>
                                    @if ($currentPage > 1)
                                        <li  style="padding:0 4px ;color:#fff"><a style="color:#fff" href="{{ route('home', ['page' => $currentPage - 1]) }}"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                    @endif
                            
                                    @for ($i = 1; $i <= $lastPage; $i++)
                                        <li style="padding:0 4px ;color:#fff" class="{{ $i == $currentPage ? 'active' : '' }}"><a style="color:#fff" href="{{ route('home', ['page' => $i]) }}">{{ $i }}</a></li>
                                    @endfor
                            
                                    @if ($currentPage < $lastPage)
                                        <li  style="padding:0 4px ;color:#fff"><a style="color:#fff" href="{{ route('home', ['page' => $currentPage + 1]) }}"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    @endif
                                </ul>
                        </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
