<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControl extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "1941720158 - Nabila Kamilia";
    }

    public function articles ($id){
        return "Halaman Artikel dengan ID" . ($id);
    }
}
