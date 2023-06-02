@extends('fontend.layout.app')

@section('content')

<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/59662fdd-1ee6-4a9c-8733-3eeb57c22956/daje8hi-18d8ddc5-9c08-477b-a317-953b5a64f5cd.jpg/v1/fill/w_1280,h_427,q_75,strp/the_dark_knight_concept_banner_by_sirbriggsy_daje8hi-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NDI3IiwicGF0aCI6IlwvZlwvNTk2NjJmZGQtMWVlNi00YTljLTg3MzMtM2VlYjU3YzIyOTU2XC9kYWplOGhpLTE4ZDhkZGM1LTljMDgtNDc3Yi1hMzE3LTk1M2I1YTY0ZjVjZC5qcGciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.4O3aFSvEaaWI5z8tb5fDJcyW-F7ZpkLRTT7NCgD6Wm8"></section>
<!-- Normal Breadcrumb End -->

@if ($errors->any())
            <div style="" class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

<!-- Signup Section Begin -->
<section class="signup spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Sign Up</h3>
                    <form action="{{ route('post_register') }}" method="POST">
                        @csrf
                        <div class="input__item">
                            <input type="text" name="email" placeholder="Email address">
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" name="username" placeholder="Your Name">
                            <span class="icon_profile"></span>
                        </div>
                        <div class="input__item">
                            <input type="password" name="password" placeholder="Password">
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Sign Up Now</button>
                    </form>
                    <h5>Already have an account? <a href="{{route('get_login')}}">Log In!</a></h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Signup Section End -->

@endsection
