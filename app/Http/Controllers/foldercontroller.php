<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class foldercontroller extends Controller
{
    public function index()
    {
        return view('folder/ajaran');

    }

    public function show($id)
    {
        $nilai= 'Ini No Urut Kamu' .$id;
        return view('folder/twice', ['folder' => $nilai]);

    }
}
