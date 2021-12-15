<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class ProfileController extends Controller
{
    public function edit_profile(){
        return view('admin.edit_profile');
    }


    // profile name update
    public function profile_name_update(REQUEST $req)
    {
        $req->validate([
            'name' => 'required',
        ]);
        User::find(Auth::id())->update([
            'name' => $req->name
        ]);
        return back()->with('success', "you are sucess to update you name ");
    }
    // profile email update
    public function profile_email_update(REQUEST $req)
    {
        $req->validate([
            'email' => 'required|unique:users,email'
        ]);

        User::find(Auth::id())->update([
            'email' => $req->email
        ]);
        return back()->with('success', "you are sucess to update you eamil ");
    }
    // profile password update
    public function profile_password_update(REQUEST $req)
    {
        $req->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|between:8,255',
            'password_confirmation' => 'required',
        ]);
        if (Hash::check($req->old_password, Auth::user()->password)) {
            User::find(Auth::id())->update([
                'password' => bcrypt($req->password)
            ]);
            return back()->with('success', "you are sucess to update you password ");
        } else {
            return back()->with('error', 'your old password ia wrong');
        }
    }
}
