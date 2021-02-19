<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
       }
       
    public function about() {
        return "NIM : 1941720234 Nama : RISKY DWI RAMADHAN";
       }

    public function articles($id) {
        return "Halaman artikel dengan id $id";
    }
}
