<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Watch;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){

        $brands = Brand::all();
        $watches = Watch::all();
        return view('pages.brendovi',[
            'brands' => $brands,
            'watches' => $watches,
        ]);
    }

    public function casio(){
        $brands = Brand::all();
        $watches = Watch::all();
        return view('brendovi.casio', [
            'watches' => $watches,
            'brands' => $brands
            ]);
    }
    public function festina(){
        $brands = Brand::all();
        $watches = Watch::all();
        return view('brendovi.festina', [
            'watches' => $watches,
            'brands' => $brands
        ]);
    }
    public function fossil(){
        $brands = Brand::all();
        $watches = Watch::all();
        return view('brendovi.fossil', [
            'watches' => $watches,
            'brands' => $brands
            ]);
    }
    public function citizen(){
        $brands = Brand::all();
        $watches = Watch::all();
        return view('brendovi.citizen', [
            'watches' => $watches,
            'brands' => $brands
            ]);
    }
    public function swatch(){
        $brands = Brand::all();
        $watches = Watch::all();
        return view('brendovi.swatch', [
            'watches' => $watches,
            'brands' => $brands
            ]);
    }
    public function esprit(){
        $brands = Brand::all();
        $watches = Watch::all();
        return view('brendovi.esprit', [
            'watches' => $watches,
            'brands' => $brands
        ]);
    }
}
