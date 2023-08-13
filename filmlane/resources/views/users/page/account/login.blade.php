@extends('users.layout.app')

@section('content')
<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/59662fdd-1ee6-4a9c-8733-3eeb57c22956/daje8hi-18d8ddc5-9c08-477b-a317-953b5a64f5cd.jpg/v1/fill/w_1280,h_427,q_75,strp/the_dark_knight_concept_banner_by_sirbriggsy_daje8hi-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NDI3IiwicGF0aCI6IlwvZlwvNTk2NjJmZGQtMWVlNi00YTljLTg3MzMtM2VlYjU3YzIyOTU2XC9kYWplOGhpLTE4ZDhkZGM1LTljMDgtNDc3Yi1hMzE3LTk1M2I1YTY0ZjVjZC5qcGciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.4O3aFSvEaaWI5z8tb5fDJcyW-F7ZpkLRTT7NCgD6Wm8"></section>
<!-- Normal Breadcrumb End -->

<<<<<<< HEAD
<section style="height:320px " class="normal-breadcrumb set-bg" data-setbg="users/img/wallpapersden.com_godzilla-4k-8k-banner_8000x2335.jpg"></section>


@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->has('login'))
    <div class="alert alert-danger">
        {{ $errors->first('login') }}
    </div>
=======
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
>>>>>>> 1891aa8efd7aa8a0f0249c39cc0534e8fe69ce62
@endif


<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form login__form_a">
                    <h3>Login</h3>
                    <form action="{{ route('post_login') }}" method="POST">
                        @csrf
                        <div class="input__item">
                            <input type="text" name="email" placeholder="Email">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="password" name="password" placeholder="Password">
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Login Now</button>
                    </form>
                    <a href="#" class="forget_pass">Forgot Your Password?</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Don't Have An Account?</h3>
                    <a href="{{ route('get_register') }}" class="primary-btn">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Section End -->

@endsection
