<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diarie;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;


class DiarieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    // index
    public function index()
    {
        return view('admin.diarie', [
            'data' => Diarie::paginate(12),
        ]);
    }



    // index
    public function add()
    {
        return view('admin.diarie_add');
    }



    // index
    public function edit($id)
    {
        return view('admin.diarie_edit', [
            'data' => Diarie::find($id),
        ]);
    }



    // store
    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);


        $id = Diarie::insertGetId([
            'title' => $req->title,
            'content' => $req->content,
            'created_at' => Carbon::now(),
        ]);

        $photo = $req->file('img');
        $photo_extention = $photo->getClientOriginalExtension();
        $photo_name = 'diarie_'. $id . "." . $photo_extention;
        Image::make($photo)->save(base_path('public/uploads/diarie/' . $photo_name));

        Diarie::find($id)->update([
            'img' => $photo_name,
        ]);

        return back()->with('success', 'Data is inserted Successfully');
    }


    // update
    public function update(Request $req)
    {
        $id = $req->id;
        $req->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Diarie::find($id)->update([
            'title' => $req->title,
            'content' => $req->content,
        ]);


        $photo = $req->file('img');

        if ($photo) {
            $req->validate([
                'img' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $old_photo_name = Diarie::find($id)->img;
            unlink('uploads/diarie/' . $old_photo_name);

            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = 'diarie_'. $id . "." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/diarie/' . $photo_name));

            Diarie::find($id)->update([
                'img' => $photo_name,
            ]);
        }

        return back()->with('success', 'Data is updated Successfully');
    }

    // delete
    public function delete($id)
    {
        $photo = Diarie::find($id)->img;
        unlink('uploads/diarie/' . $photo);
        Diarie::find($id)->forceDelete();
        return back()->with('success', 'Data is deleted Successfully');
    }


    // action
    public function action($id)
    {
        if(Diarie::find($id)->action == 1){
            Diarie::find($id)->update([
                'action' => 2,
            ]);
        }else{
            Diarie::find($id)->update([
                'action' => 1,
            ]);
        }

        return back()->with('success', 'Data Updated Successfully');
    }
}
