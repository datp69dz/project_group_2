<!-- resources/views/movies/index.blade.php -->
@extends('users.layout.app')
@section('content')
    @if (isset($message))
        <div class="alert">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- Nội dung trang web -->

    <!-- Product Section Begin -->
    <section  style="padding-bottom:0"class="product spad">
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
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="users/img/popular/movie-1.png">
                                        <div class="ep">HD</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="users/img/popular/movie-2.png">
                                        <div class="ep">HD</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="users/img/popular/movie-3.png">
                                        <div class="ep">HD</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="users/img/popular/movie-4.png">
                                        <div class="ep">HD</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="users/img/popular/movie-5.png">
                                        <div class="ep">HD</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="users/img/popular/movie-6.png">
                                        <div class="ep">HD</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="users/img/popular/movie-7.png">
                                        <div class="ep">HD</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="users/img/popular/movie-8.png">
                                        <div class="ep">HD</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Product Section End -->
        <section style="  background: url(users/img/service-bg.jpg) no-repeat;background-size: cover;background-position: center;padding-block: var(--section-padding);"
            class="service">
            <div class="container ss">
                <div class="row">
                    <div class="service-banner col-lg-6 col-md-6 col-sm-12">
                        <figure>
                            <img src="users/img/service-banner.jpg" alt="HD 4k resolution! only $3.99">
                        </figure>
                    </div>
                    <div style="padding-left: 30px;" class="service-content col-lg-6 col-md-6 col-sm-12">

                        <p class="service-subtitle">Our Services</p>

                        
                        <h2 class="h2 service-h2 service-title"> <a style="color:#fff" href="{{route('pay.index')}}">Upgrade your premium account to enjoy more benefits</a> </h2>

                        <p class="service-text">
                            Welcome to our premium account! Unlock a world of unlimited movie content and experience the
                            highest quality films like never before. Enjoy limitless streaming and indulge in the finest
                            cinematic entertainment available.
                        </p>

                        <ul class="service-list">

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <i class="fa fa-hdd-o" aria-hidden="true"></i>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 service-h3 card-title">Enjoy on Your TV.</h3>

                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <i class="fa fa-television" aria-hidden="true"></i>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 service-h3 card-title">Watch Everywhere.</h3>

                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                                        </p>
                                    </div>

                                </div>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </section>
    @endsection
