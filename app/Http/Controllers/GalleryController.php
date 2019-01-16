<?php

namespace App\Http\Controllers;

use App\Watch;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $watches = Watch::all();

        return view('pages.gallery',['watches' => $watches]);
    }
}
