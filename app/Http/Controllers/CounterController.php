<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    // index
    public function index()
    {
        return view('admin.counter', [
            'data' => Counter::paginate(12),
        ]);
    }


    // edit
    public function edit($id)
    {
        return view('admin.counter_edit', [
            'data' => Counter::find($id),
        ]);
    }


    // update
    public function counter_update(Request $req)
    {
        $id = $req->id;
        $req->validate([
            'counter_title' => 'required',
            'counter_num' => 'required',
        ]);

        Counter::find($id)->update([
            'counter_title' => $req->counter_title,
            'counter_num' => $req->counter_num,
        ]);

        return back()->with('success', 'Data is updated Successfully');
    }


}
