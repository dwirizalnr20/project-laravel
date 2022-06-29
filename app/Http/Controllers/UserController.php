<?php

namespace App\Http\Controllers;

use App\Models\Userr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function user()
    {
        $data_user = Userr::all();
        return view('layouts.user', compact('data_user'));
    }
    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/user')->with('success', 'User Berhasil di Hapus');
    }
    public function edit(Request $request, $id)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();

            // dd($data);

            Userr::where(['id' => $id])->update(['name' => $data['name'], 'email' => $data['email'], 'role' => $data['role'],]);
        }
        return redirect('/user')->with('success', 'Data User Berhasil Diedit');
    }
}
