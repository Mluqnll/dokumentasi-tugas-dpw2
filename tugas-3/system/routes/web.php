<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    return view('ecommerce.admin.index');
});

Route::get('shop', function () {
    return view('ecommerce.admin.produk');
});


Route::get('base', function () {
    return view('template.base');
});

Route::get('/', function () {
    return view('admin.superadmin.index');
});

Route::get('superadmin', function () {
    return view('admin.superadmin.index');
});


Route::get('product', function () {
    return view('admin.superadmin.product');
});

Route::get('list', function () {
    return view('admin.superadmin.kategori');
});

Route::get('login', function () {
    return view('admin.login');
});