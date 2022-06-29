<?php

namespace App\Http\Controllers;

use App\Models\aset;
use App\Models\Category;
use App\Models\Userr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_user = Userr::count();
        $jumlah_aset = aset::count();
        $jumlah_kate = Category::count();

        $role = Auth::user()->role;
        if ($role == '1') {
            return view('admin', compact('jumlah_user', 'jumlah_aset', 'jumlah_kate'));
        } elseif ($role == '2') {
            return view('admin', compact('jumlah_user', 'jumlah_aset', 'jumlah_kate'));  //petugasinfra
        } elseif ($role == '3') {
            return view('admin', compact('jumlah_user', 'jumlah_aset', 'jumlah_kate'));  //petugasaptika
        } elseif ($role == '4') {
            return view('admin', compact('jumlah_user', 'jumlah_aset', 'jumlah_kate'));  //petugassdm
        } else {
            return view('dashboard');
        }
    }
}
