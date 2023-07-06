<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;

class SliderController extends Controller
{



    // index
    public function index()
    {
        return view('admin.slider.index', [
            'data' => Slider::paginate(12),
        ]);
    }



    // Create
    public function create()
    {
        return view('admin.slider.create');
    }



    // Edit
    public function edit($id)
    {
        return view('admin.slider.edit', [
            'data' => Slider::findOrFail($id),
        ]);
    }



    // store
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|file|image|mimes:jpeg,jpg,png',
            'title' => 'required',
            'heading' => 'required',
            'btn_text' => 'required',
            'btn_url' => 'required',
        ]);

        $inputs = $request->only('title', 'heading', 'btn_text', 'btn_url');

        if ($request->hasFile('img')) {
            $image = Image::make($request->file('img'));
            $imageName = 'slider-' . time() . '.' . $request->file('img')->getClientOriginalExtension();
            $destinationPath = public_path('uploads/slider/');
            // $image->resize(600, 400);
            $image->save($destinationPath . $imageName);
            $inputs['img'] = $imageName;
        }

        try {
            Slider::create($inputs);
            Session::flash('success', 'Record create successfully');
            return redirect()->route('admin.sliders.index');
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
            'heading' => 'required',
            'btn_text' => 'required',
            'btn_url' => 'required',
        ]);

        $inputs = $request->only('title', 'heading', 'btn_text', 'btn_url');

        if ($request->hasFile('img')) {

            $currentImage = Slider::find($id)->img;
            unlink(public_path('uploads/slider/' . $currentImage));

            $image = Image::make($request->file('img'));
            $imageName = 'slider-' . time() . '.' . $request->file('img')->getClientOriginalExtension();
            $destinationPath = public_path('uploads/slider/');
            // $image->resize(600, 400);
            $image->save($destinationPath . $imageName);
            $inputs['img'] = $imageName;
        }

        try {
            Slider::find($id)->update($inputs);
            Session::flash('success', 'Record updated successfully');
            return redirect()->route('admin.sliders.index');
        } catch (\Exception $exception) {
            Session::flash('error', $exception->getMessage());
            return redirect()->back();
        }
    }

    // delete
    public function destroy($id)
    {
        $data = Slider::findOrFail($id);
        unlink('uploads/slider/' . $data->img);
        $data->forceDelete();
        return back()->with('success', 'Data is deleted Successfully');
    }
}
