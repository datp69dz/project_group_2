<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Css Styles -->
    <link rel="stylesheet" href="../fontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../fontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../fontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../fontend/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../fontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../fontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../fontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../fontend/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Phần đầu trang -->
    @include('../fontend.includes.header')

    <!-- Nội dung chính -->
    @yield('content')

    <!-- Phần cuối trang -->
    @include('../fontend.includes.footer')
    <div></div>

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="../fontend/js/jquery-3.3.1.min.js"></script>
<script src="../fontend/js/bootstrap.min.js"></script>
<script src="../fontend/js/player.js"></script>
<script src="../fontend/js/jquery.nice-select.min.js"></script>
<script src="../fontend/js/mixitup.min.js"></script>
<script src="../fontend/js/jquery.slicknav.js"></script>
<script src="../fontend/js/owl.carousel.min.js"></script>
<script src="../fontend/js/main.js"></script>


</body>

</html>