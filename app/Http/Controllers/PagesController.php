<?php

namespace App\Http\Controllers;


use App\Comment;
use App\Role;
use App\Watch;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $mightAlsoLike = Watch::mightAlsolike()->get();

        return view ('pages.home', [
            'mightAlsoLike' => $mightAlsoLike
        ]);
    }


    public function proizvodi(){


        $watches = Watch::orderBy('name','desc')->paginate(6);
       /* $slika = new Slika();*/
        /*$brendovi = new Brend();*/


        return view ('pages.proizvodi',['watches' => $watches]);
    }

    public function show($id){
        $watch = Watch::find($id);
        $mightAlsoLike = Watch::mightAlsolike()->get();
        $comments = Comment::all();

        return view('pages.watch',[ 'mightAlsoLike' => $mightAlsoLike, 'comments' => $comments])->with('watch',$watch);
    }

    public function kontakt(){
        $roles = new Role();
         return view('pages.kontakt', ['roles' => $roles]);
    }


}
