<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;
use Image;

class LogoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    // index
    public function index()
    {
        return view('admin.logo', [
            'data' => Logo::find(1),
        ]);
    }




    // update
    public function update(Request $req)
    {
        $id = $req->id;
        $photo = $req->file('img');


        $req->validate([
            'img' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $old_photo_name = Logo::find($id)->logo;
        unlink('uploads/logo/' . $old_photo_name);

        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = "logo." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/logo/' . $photo_name));

        Logo::find($id)->update([
            'logo' => $photo_name,
        ]);


        return back()->with('success', 'Data is updated Successfully');
    }

}
