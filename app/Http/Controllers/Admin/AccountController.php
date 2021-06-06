<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showAccount(){
        $id = Auth::guard('admin')->user()->id;
        $data = Admin::findOrFail($id);
        return view('pages.admin.account.show',[
            'data' => $data
        ]);
    }

    public function updateAccount(Request $request){
        $id = Auth::guard('admin')->user()->id;

        $data = $request->all();
        if ($request->file('foto')) {
            $data['foto']  = $request->file('foto')->store('assets/pengguna', 'public');
        }

        if ($request->password) {
            $data['password']  = bcrypt($request->password);
        } else {
            unset($data['password']);
        }

        $item = Admin::findOrFail($id);
        $item->update($data);

        return redirect()->route('show-account')->with('message-update', 'Data Berhasil Diubah');
    }
}
