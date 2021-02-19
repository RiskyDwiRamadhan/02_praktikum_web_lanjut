<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
       }
       
    public function about() {
        return "NAMA : RISKY DWI RAMADHAN <br> NIM : 1941720234";
       }

    public function articles($id) {
        return "Halaman artikel dengan id $id";
    }
}
