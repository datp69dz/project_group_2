<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.html">
                        <img src="users/img/logo.png" alt="">
                    </a>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Homepage</a></li>
                            <li><a href="">Categories <span class="arrow_carrot-down"></span></a>
                                <ul id="category-list" class="dropdown">
                                    <li><a href="{{ route('category.movies', 1) }}">Action</a></li>
                                    <li><a href="{{ route('category.movies', 2) }}">Comedy</a></li>
                                    <li><a href="{{ route('category.movies', 3) }}">Drama</a></li>
                                    <li><a href="{{ route('category.movies', 4) }}">Romance</a></li>
                                    <li><a href="{{ route('category.movies', 5) }}">Sci-Fi</a></li>
                                    <li><a href="{{ route('category.movies', 6) }}">Horror</a></li>
                                    <li><a href="{{ route('category.movies', 7) }}">Thriller</a></li>
                                    <li><a href="{{ route('category.movies', 8) }}">Adventure</a></li>
                                    <li><a href="{{ route('category.movies', 9) }}">Animation</a></li>
                                    <li><a href="{{ route('category.movies', 10) }}">Documentary</a></li>

                                </ul>
                            </li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>


            <div class="col-lg-2">
                <div class="header__right" style="display: flex; align-items: center;">
                    <form action="{{ route('movies.search') }}" method="POST">
                        @csrf
                        <div class="header__search">
                            <input type="text" name="keyword" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </div>
                    </form>
                    @if (session('user'))
                        <div style="display: flex; align-items: center;" onmouseenter="showLogout()" onmouseleave="hideLogout()">
                            <img style="width:40px ; height:30px; margin-right: 10px;" src="{{ session('user')->image }}" alt="{{ session('user')->username }}">
                            <span style="margin-right: 10px;">{{ session('user')->username }}</span>
                            <a style="font-size: 15px" href="{{ route('logout') }}" style="margin-left: 10px; display: none;" id="logoutLink">Logout</a>
                        </div>
                    @else
                        <a href="{{ route('get_login') }}"><span class="icon_profile"></span></a>
                    @endif
                </div>
                
                <script>
                    function showLogout() {
                        const logoutLink = document.getElementById('logoutLink');
                        logoutLink.style.display = 'inline-block';
                    }
                
                    function hideLogout() {
                        const logoutLink = document.getElementById('logoutLink');
                        logoutLink.style.display = 'none';
                    }
                </script>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->
