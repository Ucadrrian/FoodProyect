<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function getHome(){
        return view('Home');
    }

    public function getAbout(){
        return view('About');
    }

    public function getGallery(){
        return view('Gallery');
    }
}
