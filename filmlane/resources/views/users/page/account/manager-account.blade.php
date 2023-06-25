@extends('users.layout.app')

@section('content')

<style>
    .account-container {
        max-width: 500px;
        margin: 0 auto;
        background-color: #4a4f5465;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .user-info {
        margin-top: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .user-info img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .user-info label {
        font-weight: bold;
        color: #555;
    }

    .user-info span {
        margin-left: 10px;
        color: #333;
    }

    .edit-link {
        display: inline-block;
        text-align: center;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .edit-link:hover {
        background-color: #0056b3;
    }
</style>

<div style="padding: 0; background: url(https://codewithsadee.github.io/filmlane/assets/images/footer-bg.jpg); background-size: 100%; background-position: center; padding-block: var(--section-padding);" class="">
    <div class="account-container">

        <div class="user-info">
            <img src="{{ asset('users/img/users/' . $user->image) }}" alt="Profile Picture">
            <form method="GET" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
                <button type="submit">Update Image</button>
            </form>
            <div>
                <label style="color:#717171">Email:</label>
                <span style="color:#717171">{{ $user->email }}</span>
            </div>
            <div>
                <label style="color:#717171">Name:</label>
                <span style="color:#717171">{{ $user->username }}</span>
            </div>
            <div>
                <label style="color:#717171">Account Status:</label>
                <span style="color:#717171">{{ $user->status == 1 ? 'Chưa thanh toán' : 'Đã thanh toán' }}</span>
            </div>
        </div>p

    </div>
</div>


@endsection
