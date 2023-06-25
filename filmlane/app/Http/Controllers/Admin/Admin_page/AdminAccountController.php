<?php

namespace App\Http\Controllers\Admin\Admin_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminAccount;

class AdminAccountController extends Controller
{
    public function index()
    {
        $adminAccounts = AdminAccount::all();
        return view('admin.page.admin_page.index', ['adminAccounts' => $adminAccounts]);
    }

    public function create()
    {
        return view('admin.page.admin_page.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'admin_username' => 'required',
            'admin_password' => 'required',
            'email' => 'required|email',
        ]);

        // Lưu thông tin tài khoản vào cơ sở dữ liệu
        AdminAccount::create($data);

        return redirect()->route('admin-accounts.index')->with('success', 'Tài khoản đã được tạo thành công');
    }

    public function show($id)
    {
        $adminAccount = AdminAccount::findOrFail($id);
        return view('admin-accounts.show', ['adminAccount' => $adminAccount]);
    }

    public function edit($id)
    {
        $adminAccount = AdminAccount::findOrFail($id);
        return view('admin-accounts.edit', ['adminAccount' => $adminAccount]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'image' => 'nullable|image',
            'admin_date' => 'required|date',
            'admin_update' => 'required|date',
        ]);

        $adminAccount = AdminAccount::findOrFail($id);
        $adminAccount->update($data);

        return redirect()->route('admin-accounts.show', $adminAccount->admin_id)->with('success', 'Thông tin tài khoản đã được cập nhật thành công');
    }

    public function destroy($id)
    {
        $adminAccount = AdminAccount::findOrFail($id);
        $adminAccount->delete();

        return redirect()->route('admin-accounts.index')->with('success', 'Tài khoản đã được xóa thành công');
    }


}
