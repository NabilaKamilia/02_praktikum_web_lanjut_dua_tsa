<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControl extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
}
