<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     // view page
     public function index()
     {
         return view('admin.social', [
             'socials' => Social::all(),
         ]);
     }

     // social_update
     public function social_update(Request $req)
     {
        foreach($req->social as $social_key => $social_value){
            if($social_value == ''){
                Social::where('social_name', $social_key)->update([
                    "social_value" => NULL,
                ]);
            }else{
                Social::where('social_name', $social_key)->update([
                    "social_value" => $social_value,
                ]);
            }
        }
        return back()->with('success', 'Data is Updated Successfull');
     }
}
