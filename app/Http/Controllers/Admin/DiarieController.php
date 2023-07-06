<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diarie;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Image;



class DiarieController extends Controller
{


    // index
    public function index()
    {
        return view('admin.diarie.index', [
            'data' => Diarie::paginate(12),
        ]);
    }



    // Create
    public function create()
    {
        return view('admin.diarie.create');
    }



    // Edit
    public function edit($id)
    {
        return view('admin.diarie.edit', [
            'data' => Diarie::find($id),
        ]);
    }



    // store
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'required|file|image|mimes:jpeg,jpg,png',
        ]);

        $inputs = $request->only('title', 'content');

        if ($request->hasFile('img')) {
            $image = Image::make($request->file('img'));
            $imageName = 'diarie-' . time() . '.' . $request->file('img')->getClientOriginalExtension();
            $destinationPath = public_path('uploads/diarie/');
            // $image->resize(600, 400);
            $image->save($destinationPath . $imageName);
            $inputs['img'] = $imageName;
        }

        try {
            Diarie::create($inputs);
            Session::flash('success', 'Record create successfully');
            return redirect()->route('admin.diaries.index');
        } catch (\Exception $exception) {
            Session::flash('error', $exception->getMessage());
            return redirect()->back();
        }
    }


    // update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $inputs = $request->only('title', 'content');

        if ($request->hasFile('img')) {

            $currentImage = Diarie::find($id)->img;
            unlink(public_path('uploads/diarie/' . $currentImage));

            $image = Image::make($request->file('img'));
            $imageName = 'diarie-' . time() . '.' . $request->file('img')->getClientOriginalExtension();
            $destinationPath = public_path('uploads/diarie/');
            // $image->resize(600, 400);
            $image->save($destinationPath . $imageName);
            $inputs['img'] = $imageName;
        }

        try {
            Diarie::findorFail($id)->update($inputs);
            Session::flash('success', 'Record updated successfully');
            return redirect()->route('admin.diaries.index');
        } catch (\Exception $exception) {
            Session::flash('error', $exception->getMessage());
            return redirect()->back();
        }
    }

    // delete
    public function destroy($id)
    {
        $data = Diarie::findOrFail($id);
        unlink('uploads/diarie/' . $data->img);
        $data->forceDelete();
        return back()->with('success', 'Data is deleted Successfully');
    }
}
