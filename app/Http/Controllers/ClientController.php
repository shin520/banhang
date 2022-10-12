<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view ('client.index');
    }
    public function product(){
        return view ('client.product');
    }
    public function product_detail(){
        return view ('client.product_detail');
    }
    public function cart(){
        return view ('client.cart');
    }
    public function blog(){
        return view ('client.blog');
    }
    public function blog_detail(){
        return view ('client.blog_detail');
    }
}
