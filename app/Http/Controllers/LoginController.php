<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function submit(Request $request)
    {
        if (session()->has('user')) {
            return back();
        }
        // Validacija
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Validation passed, check in db for user
        $user = new User();
        $user->email = $validated['email'];
        $user->password = $validated['password'];

        $userCheck = $user->checkUser();
        if ($userCheck) {
            // Success, set user into session
            session()->put('user', $userCheck);

            return redirect()->route('admin');
        }

        // false
        return redirect()->route('login')->with('error', 'Nepostojeca email ili lozinka');
    }

    public function logout()
    {
        if (session()->has('user')) {
            session()->flush();

            return redirect()->route('home');
        }
        return back();
    }
}
