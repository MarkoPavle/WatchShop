<?php

namespace App\Http\Controllers;

use App\Mail\ServisZakazan;
use App\Servis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServisController extends Controller
{
    public function index(){
        return view('pages.servis');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'type_service' => 'required',
            'date' => 'date|required',
            'message' => 'nullable'
        ]);

        $servis = new Servis();

        $servis->name = $validated['name'];
        $servis->surname = $validated['surname'];
        $servis->email = $validated['email'];
        $servis->type_service = $validated['type_service'];
        $servis->date = $validated['date'];
        $servis->message = $validated['message'];

        Mail::to($request->email)->send(new ServisZakazan());

        $servis ->save();


        return redirect()->back()->with('success' , 'Uspesno ste zakazali servis');
    }

}
