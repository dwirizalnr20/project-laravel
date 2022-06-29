<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\itemcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/redirects', [HomeController::class, "index"])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/hardware', [itemcontroller::class, 'index'])->middleware('auth');
Route::get('/software ', [itemController::class, 'show'])->middleware('auth');
Route::get('/sdm', [itemController::class, 'sdm'])->middleware('auth');

Route::get('/user', [UserController::class, 'user'])->middleware('auth');

Route::get('/admin', function () {
    return view('admin');
});


Route::delete('/aset{id}', [AsetController::class, 'delete']);
Route::delete('/asethd{id}', [AsetController::class, 'delete']);
Route::delete('/user{id}', [UserController::class, 'delete']);
Route::match(['get', 'post'], '/user{id}', [UserController::class, 'edit']);

Route::get('/kategori', [KategoriController::class, 'kat'])->middleware('auth');
Route::post('/kategori', [KategoriController::class, 'storetambah']);
Route::delete('/kategori{id}', [KategoriController::class, 'delete']);
Route::match(['get', 'post'], '/kategori{id}', [KategoriController::class, 'edit']);


Route::group(['middleware' => ['auth', 'ceklevel:admin,petugasaptika,petugasinfra,petugassdm']], function () {
    route::get('/dashboard', [HomeController::class, 'index'])->name('home');
});

Route::post('/softwareadm', [AsetController::class, 'storesoftware']);
Route::get('/softwareadm{id}', [AsetController::class, 'showdata']);


Route::get('/softwareadm', [AsetController::class, 'software'])->middleware('auth');
Route::delete('/softwareadm{id}', [AsetController::class, 'deletesw']);
Route::match(['get', 'post'], '/aset{id}', [AsetController::class, 'editsw']);

Route::post('/hardwareadm', [AsetController::class, 'storehardware']);
Route::match(['get', 'post'], '/hardwareadm{id}', [AsetController::class, 'edithw']);
Route::get('/hardwareadm', [AsetController::class, 'hardware'])->middleware('auth');
Route::delete('/hardwareadm{id}', [AsetController::class, 'deletehw']);

Route::post('/sdmadm', [AsetController::class, 'storesdm']);
Route::get('/sdmadm', [AsetController::class, 'sdmadm'])->middleware('auth');
Route::delete('/sdmadm{id}', [AsetController::class, 'deletesdm']);
Route::match(['get', 'post'], '/sdmadm{id}', [AsetController::class, 'editsdm']);
