<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Image;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    // index
    public function index()
    {
        return view('admin.portfolio', [
            'data' => Portfolio::paginate(12),
        ]);
    }


    // edit
    public function edit($id)
    {
        return view('admin.portfolio_edit', [
            'data' => Portfolio::find($id),
        ]);
    }


    // update
    public function update(Request $req)
    {
        $id = $req->id;
        $req->validate([
            'title' => 'required',
        ]);

        Portfolio::find($id)->update([
            'title' => $req->title,
        ]);


        $photo = $req->file('img');

        if ($photo) {
            $req->validate([
                'img' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $old_photo_name = portfolio::find($id)->img;
            unlink('uploads/portfolio/' . $old_photo_name);

            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = 'portfolio_'. $id . "." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/portfolio/' . $photo_name));

            Portfolio::find($id)->update([
                'img' => $photo_name,
            ]);
        }

        return back()->with('success', 'Data is updated Successfully');
    }


}
