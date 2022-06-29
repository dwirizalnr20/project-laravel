<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\item;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function kat()
    {
        $data_kat = Category::all();
        return view('layouts.kategori', compact('data_kat'));
    }


    public function delete($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect('/kategori')->with('success', 'Kategori Berhasil Dihapus');
    }

    public function storetambah(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
        ]);


        Category::create($validatedData);

        // $request->session()->flash('status', 'Task was successful!');


        return redirect('/kategori')->with('success', 'Tambah Data Berhasil');
    }
    public function edit(Request $request, $id)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();

            // dd($data);

            Category::where(['id' => $id])->update(['name' => $data['name']]);
        }
        return redirect('/kategori')->with('success', 'Data Kategori Berhasil Diedit');
    }
}
