<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index($id){
    return '<a href="https://www.educastudio.com/'.$id.'">https://www.educastudio.com/'.$id.'</a>';
    }
    
    public function about($id){
        return '<a href="https://www.educastudio.com/about-us'.$id.'">https://www.educastudio.com/about-us'.$id.'</a>';
    }
}
