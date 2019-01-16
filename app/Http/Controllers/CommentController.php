<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){

        $validated = $request->validate([
            'comment' => 'required',
            /*'watch_id' => 'required'*/
        ]);
        $comment = new Comment();

        $comment->comment=$validated['comment'];
        $comment->watch_id = $request->id;



        $comment->save();

        return back()->with('success' , 'Komentar postavljen!');


    }
}
