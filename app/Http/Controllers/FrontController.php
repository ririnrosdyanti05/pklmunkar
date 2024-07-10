<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function contact()
    {
        return view('contact');
    }
    public function shop()
    {
        return view('shop');
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function shopdetail()
    {
        return view('shopdetail');
    }
    public function track()
    {
        return view('track');
    }
    public function tes()
    {
        return view('tes');
    }
    public function pkl()
    {
        return view('pkl');
    }
    public function profil()
    {
        return view('profil');
    }
    public function kontak()
    {
        return view('kontak');
    }
}
