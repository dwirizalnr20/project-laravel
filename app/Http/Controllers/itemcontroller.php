<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class itemcontroller extends Controller
{
    public function index()
    {
        $data = DB::table('items')->where('category_id', 1)->get();
        return view('hardware', ['data' => $data]);
    }
    public function show()
    {
        $data = DB::table('items')->where('category_id', 2)->get();
        return view('software', ['data' => $data]);
    }
    public function sdm()
    {
        $data = DB::table('items')->where('category_id', 3)->get();
        return view('sdm', ['data' => $data]);
    }
}
