<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',

        ]);

        $user = new User();

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = md5($validated['password']);
        $user->role_id = $request->role;


        try{
            $user->save();

            return back()->with('success', 'Uspesno ste se registrovali');

        }
        catch (Exception $e){

            return back()->with('error',$e->getMessage());
        }

    }
}
