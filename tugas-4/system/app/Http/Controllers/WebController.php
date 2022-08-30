<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk;

class WebController extends Controller
{
    public function index()
    {
        $data['list_produk'] = Produk::orderBY('id','DESC')->take(4)->get();
        return view('ecommerce.admin.index', $data);
    }
    
    public function produk()
    { 
        $data['list_produk'] = Produk::all();
        return view('ecommerce.admin.produk',$data);
    }

}
