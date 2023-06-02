<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.html">
                        <img src="../fontend/img/logo.png" alt="">
                    </a>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="./categories.html">Categories</a></li>
                                    <li><a href="./anime-details.html">Anime Details</a></li>
                                    <li><a href="./anime-watching.html">Anime Watching</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                    <li><a href="./signup.html">Sign Up</a></li>
                                    <li><a href="./login.html">Login</a></li>
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
                    <a href="#" class="search-switch"><span class="icon_search"></span></a>
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
