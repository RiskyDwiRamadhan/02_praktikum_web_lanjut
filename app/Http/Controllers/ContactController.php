<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function product($id){
        return '<a href="https://www.educastudio.com/contact-us'.$id.'">https://www.educastudio.com/contact-us'.$id.'</a>';
    }
}

