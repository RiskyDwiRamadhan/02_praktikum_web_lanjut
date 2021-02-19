<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact($id){
        return '<a href="https://www.educastudio.com/'.$id.'">https://www.educastudio.com/'.$id.'</a>';
    }
}

