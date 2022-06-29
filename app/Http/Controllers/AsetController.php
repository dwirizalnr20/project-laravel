<?php

namespace App\Http\Controllers;

use App\Models\aset;
use App\Models\Category;
use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsetController extends Controller
{
    public function software()
    {
        $categories =  DB::table('categories')->where('id', 2)->get();
        $data_software = DB::table('items')->where('category_id', 2)->get();
        return view('layouts.softwareadm', ['data_software' => $data_software], ['categories' => $categories]);
    }
    public function hardware()
    {
        $categories =  DB::table('categories')->where('id', 1)->get();
        $data_hardware = DB::table('items')->where('category_id', 1)->get();
        return view('layouts.hardwareadm', ['data_hardware' => $data_hardware], ['categories' => $categories]);
    }
    public function storehardware(Request $request)
    {

        $validatedData = $request->validate([
            'nama_item' => 'required',
            'category_id' => 'required',
            'keterangan' => 'required',
            'pemegang' => ['required'],
            'gambar' => 'image|file'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('aset');
        }
        aset::create($validatedData);

        // $request->session()->flash('status', 'Task was successful!');


        return redirect('/hardwareadm')->with('success', 'Tambah Data Berhasil');
    }
    public function deletehw($id)
    {
        DB::table('items')->where('id', $id)->delete();
        return redirect('/hardwareadm')->with('success', 'Aset Berhasil Dihapus');
    }
    public function storesoftware(Request $request)
    {

        $validatedData = $request->validate([
            'nama_item' => 'required',
            'category_id' => 'required',
            'keterangan' => 'required',
            'pemegang' => ['required'],
            'gambar' => 'image|file'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('aset');
        }
        aset::create($validatedData);

        // $request->session()->flash('status', 'Task was successful!');


        return redirect('/softwareadm')->with('success', 'Tambah Data Berhasil');
    }
    public function deletesw($id)
    {
        DB::table('items')->where('id', $id)->delete();
        return redirect('/softwareadm')->with('success', 'Aset Berhasil Dihapus');
    }
    public function sdmadm()
    {
        $categories =  DB::table('categories')->where('id', 3)->get();
        $data_sdm = DB::table('items')->where('category_id', 3)->get();
        return view('layouts.sdmadm', ['data_sdm' => $data_sdm], ['categories' => $categories]);
    }
    public function storesdm(Request $request)
    {

        $validatedData = $request->validate([
            'nama_item' => 'required',
            'category_id' => 'required',
            'keterangan' => 'required',
            'pemegang' => ['required'],
            'gambar' => 'image|file'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('aset');
        }
        aset::create($validatedData);

        // $request->session()->flash('status', 'Task was successful!');


        return redirect('/sdmadm')->with('success', 'Tambah Data Berhasil');
    }
    public function deletesdm($id)
    {
        DB::table('items')->where('id', $id)->delete();
        return redirect('/sdmadm')->with('success', 'Aset Berhasil Dihapus');
    }
    public function editsw(Request $request, $id)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();

            // dd($data);

            aset::where(['id' => $id])->update(['nama_item' => $data['nama_item'], 'keterangan' => $data['keterangan'], 'pemegang' => $data['pemegang'],]);
        }
        return redirect('/softwareadm')->with('success', 'Aset Berhasil Diedit');
    }
    public function editsdm(Request $request, $id)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();

            // dd($data);

            aset::where(['id' => $id])->update(['nama_item' => $data['nama_item'], 'keterangan' => $data['keterangan'], 'pemegang' => $data['pemegang'],]);
        }
        return redirect('/sdmadm')->with('success', 'Aset Berhasil Diedit');
    }
    public function edithw(Request $request, $id)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();

            // dd($data);

            aset::where(['id' => $id])->update(['nama_item' => $data['nama_item'], 'keterangan' => $data['keterangan'], 'pemegang' => $data['pemegang'],]);
        }
        return redirect('/hardwareadm')->with('success', 'Aset Berhasil Diedit');
    }
}
