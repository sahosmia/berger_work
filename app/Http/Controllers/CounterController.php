<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CounterController extends Controller
{
    // index
    public function index()
    {
        return view('admin.counter.index', [
            'data' => Counter::paginate(12),
        ]);
    }


    // edit
    public function edit($id)
    {
        return view('admin.counter.edit', [
            'data' => Counter::find($id),
        ]);
    }


    // update
    public function update(Request $request, $id)
    {
        $request->validate([
            'counter_title' => 'required',
            'counter_num' => 'required',
        ]);

        $inputs = $request->only('counter_title', 'counter_num');

        try {
            Counter::find($id)->update($inputs);
            Session::flash('success', 'Record updated successfully');
            return redirect()->route('admin.counters.index');
        } catch (\Exception $exception) {
            Session::flash('error', $exception->getMessage());
            return redirect()->back();
        }
    }
}
