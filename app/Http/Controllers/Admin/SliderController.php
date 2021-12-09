<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    // index
    public function index()
    {
        return view('admin.slider', [
            'data' => Slider::paginate(12),
        ]);
    }



    // index
    public function add()
    {
        return view('admin.slider_add');
    }



    // index
    public function edit($id)
    {
        return view('admin.slider_edit', [
            'data' => Slider::find($id),
        ]);
    }



    // store
    public function store(Request $req)
    {
        $req->validate([
            'img' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);


        $id = Slider::insertGetId([
            'created_at' => Carbon::now(),
        ]);

        $photo = $req->file('img');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = 'slider_'. $id . "." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/slider/' . $photo_name));

        Slider::find($id)->update([
            'img' => $photo_name,
        ]);

        return back()->with('success', 'Data is inserted Successfully');
    }


    // update
    public function update(Request $req)
    {
        $id = $req->id;

        $photo = $req->file('img');

        $req->validate([
            'img' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $old_photo_name = Slider::find($id)->img;
        unlink('uploads/slider/' . $old_photo_name);

        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = 'slider_'. $id . "." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/slider/' . $photo_name));

        Slider::find($id)->update([
            'img' => $photo_name,
        ]);


        return back()->with('success', 'Data is updated Successfully');
    }

    // delete
    public function delete($id)
    {
        $photo = Slider::find($id)->img;
        unlink('uploads/slider/' . $photo);
        Slider::find($id)->forceDelete();
        return back()->with('success', 'Data is deleted Successfully');
    }


    // action
    public function action($id)
    {
        if(Slider::find($id)->action == 1){
            Slider::find($id)->update([
                'action' => 2,
            ]);
        }else{
            Slider::find($id)->update([
                'action' => 1,
            ]);
        }

        return back()->with('success', 'Data Updated Successfully');
    }
}
