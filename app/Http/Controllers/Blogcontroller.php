<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    public function index()
    {
        return view('Blog/belajar');
    }
    
    public function show($id)
    {
        $nilai= 'Ini Adalah Nilai Kamu:'. $id;
        return view('Blog/single', ['Blog' => $nilai]); 

    }
}


