<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(){
        return view('admin.language',[
            'language' => Language::all(),
        ]);
    }



     // language_update
     public function language_update(Request $req){


        foreach($req->language as $language_name => $language_value){
            if ($language_value == '') {
                $req->validate([
                    $language_name => 'required',
                 ],[
                     $language_name.'.required' => $language_name .' field is must required',
                 ]);
            }

            Language::where('lang_name', $language_name)->update([
                "lang_value" => $language_value,
            ]);
        }

        return back()->with('success', 'Language data is updated successfully');
     }
}
