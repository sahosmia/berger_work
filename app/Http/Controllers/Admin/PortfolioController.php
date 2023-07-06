<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Session;


class PortfolioController extends Controller
{

    // index
    public function index()
    {
        return view('admin.portfolio.index', [
            'data' => Portfolio::paginate(12),
        ]);
    }


    // edit
    public function edit($id)
    {
        return view('admin.portfolio.edit', [
            'data' => Portfolio::findOrFail($id),
        ]);
    }


    // update
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);


        $inputs = $request->only('title');

        if ($request->hasFile('img')) {

            $currentImage = Portfolio::find($id)->img;
            unlink(public_path('uploads/portfolio/' . $currentImage));

            $image = Image::make($request->file('img'));
            $imageName = 'portfolio-' . time() . '.' . $request->file('img')->getClientOriginalExtension();
            $destinationPath = public_path('uploads/portfolio/');
            // $image->resize(600, 400);
            $image->save($destinationPath . $imageName);
            $inputs['img'] = $imageName;
        }

        try {
            Portfolio::find($id)->update($inputs);
            Session::flash('success', 'Record updated successfully');
            return redirect()->route('admin.portfolios.index');
        } catch (\Exception $exception) {
            Session::flash('error', $exception->getMessage());
            return redirect()->back();
        }
    }
}
