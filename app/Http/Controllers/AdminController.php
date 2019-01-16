<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Servis;
use App\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $watches = Watch::all();
        $servisi = Servis::all();

        return view('pages.admin',[
            'watches' =>$watches,
            'brands' =>$brands,
            'servisi' =>$servisi
            ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'details' => 'required',
            'image' => 'image|nullable',
            'brand_id' => 'required'
        ]);

        if ($request->hasFile('image')) {
            // Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Store Image in storage
            $path = $request->file('image')->storeAs('public/images/watches', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }

        $watch = new Watch();
        $watch -> name = $validated['name'];
        $watch -> price = $validated['price'];
        $watch -> details = $validated['details'];
        $watch -> image = $fileNameToStore;
        $watch-> brand_id = $validated['brand_id'];

        $watch -> save();

        return redirect()->back()->with('success' , 'Uspesno unesen proizvod');

    }
    public function delete($id){

        $watch = new Watch();

        $watch->findOrFail($id)->delete();

        return back()->with('success','Uspesno ste obrisali post');

    }

    public function edit($id){
        $brands = Brand::all();
        $watch = Watch::find($id);


        return view('pages.admin_edit',['brands' => $brands])->with('watch', $watch);
    }

    public function update(Request $request,$id){
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'details' => 'required',
            'image' => 'image|nullable',
            'brand_id' => 'required'
        ]);

        if ($request->hasFile('image')) {
            // Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Store Image in storage
            $path = $request->file('image')->storeAs('public/images/watches', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noimage.jpg';
        }

        $watch = Watch::find($id);
        $watch -> name = $validated['name'];
        $watch -> price = $validated['price'];
        $watch -> details = $validated['details'];
        $watch -> image = $fileNameToStore;
        $watch-> brand_id = $validated['brand_id'];

        $watch -> save();

        return redirect()->back()->with('success' , 'Uspesno azuriran proizvod');
    }
}