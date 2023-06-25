<?php

namespace App\Http\Controllers\Users\Account;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;


class AccountMangerController extends Controller
{
    public function show()
    {
 // Lấy ID của người dùng đã đăng nhập
 $userId = auth()->user()->account_id;

 // Lấy thông tin tài khoản từ bảng "accounts" dựa trên ID
 $user = Account::find($userId);

 return view('users.page.account.manager-account', compact('user'));
    }

    public function updateImage(Request $request)
    {
        // Kiểm tra xem người dùng đã tải lên hình ảnh mới hay chưa
        if ($request->hasFile('image')) {
            // Lưu hình ảnh mới vào thư mục lưu trữ (ví dụ: users/img/users)
            $image = $request->file('image');
            $imagePath = $image->store('users/img/users', 'public');

            // Cập nhật đường dẫn hình ảnh trong cơ sở dữ liệu
            $user = Account::account_id();
            $user->image = $imagePath;
            $user->save();
        }

        return redirect()->route('account.show');
    }
}