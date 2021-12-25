<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Image;

class PageController extends Controller
{

    // home page
    public function home_page(){
        return view('admin.home_page');
    }
    // contact page
    public function contact_page(){
        return view('admin.contact_page');
    }

    // corporate_speech page    // md speech     // chairman speech
    public function corporate_speech(){
        return view('admin.corporate_speech');
    }


    // home_page_update
    public function home_page_update (Request $req){


        $id = 1;

        $req->validate([
            'portfolio_title' => 'required',
            'portfolio_content' => 'required',
            'diarie_title' => 'required',
            'diarie_content' => 'required',
            'copywrite' => 'required',
        ]);


        Page::find($id)->update([
            'portfolio_title' => $req->portfolio_title,
            'portfolio_content' => $req->portfolio_content,
            'diarie_title' => $req->diarie_title,
            'diarie_content' => $req->diarie_content,
            'copywrite' => $req->copywrite,
        ]);


        $photo = $req->file('logo');

        if ($photo) {
            $req->validate([
                'logo' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $old_photo_name = Page::find($id)->logo;
            unlink('uploads/logo/' . $old_photo_name);

            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = "logo." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/logo/' . $photo_name));

            Page::find($id)->update([
                'logo' => $photo_name,
            ]);
        }



        $photo = $req->file('contact_head_logo');

        if ($photo) {
            $req->validate([
                'contact_head_logo' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $old_photo_name = Page::find($id)->contact_head_logo;
            unlink('uploads/' . $old_photo_name);

            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = "contact_head_logo." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

            Page::find($id)->update([
                'contact_head_logo' => $photo_name,
            ]);
        }


        $photo = $req->file('contact_bg');

        if ($photo) {
            $req->validate([
                'contact_bg' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $old_photo_name = Page::find($id)->contact_bg;
            unlink('uploads/' . $old_photo_name);

            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = "contact_bg." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

            Page::find($id)->update([
                'contact_bg' => $photo_name,
            ]);
        }

        return back()->with('success', 'Data is updated Successfully');
    }

    // contact_page_update
    public function contact_page_update (Request $req){


//         print_r($req->all());
// die();
        $id = 1;

        $req->validate([
            'contact_details' => 'required',
            'contact_map' => 'required',
        ]);


        Page::find($id)->update([
            'contact_details' => $req->contact_details,
            'contact_map' => $req->contact_map,
        ]);


        $photo = $req->file('contact_logo');

        if ($photo) {
            $req->validate([
                'contact_logo' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $old_photo_name = Page::find($id)->contact_logo;
            unlink('uploads/logo/' . $old_photo_name);

            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = "contact_logo." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/logo/' . $photo_name));

            Page::find($id)->update([
                'contact_logo' => $photo_name,
            ]);
        }





        $photo = $req->file('contact_banner');

        if ($photo) {
            $req->validate([
                'contact_banner' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $old_photo_name = Page::find($id)->contact_banner;
            // unlink('uploads/' . $old_photo_name);

            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = "contact_banner." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

            Page::find($id)->update([
                'contact_banner' => $photo_name,
            ]);
        }

        return back()->with('success', 'Data is updated Successfully');
    }

    // md_speech Update
    public function md_speech_update (Request $req){
        $id = 1;

        $req->validate([
            'md_speech' => 'required',
        ]);

        Page::find($id)->update([
            'md_speech' => $req->md_speech,
        ]);


        $photo = $req->file('md_speech_img');

        if ($photo) {
            $req->validate([
                'md_speech_img' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $old_photo_name = Page::find($id)->md_speech_img;
            unlink('uploads/' . $old_photo_name);

            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = "md_speech_img." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

            Page::find($id)->update([
                'md_speech_img' => $photo_name,
            ]);
        }

        return back()->with('success', 'Data is updated Successfully');
    }


    // chairman_speech Update
    public function chairman_speech_update (Request $req){
        $id = 1;
        $req->validate([
            'chairman_speech' => 'required',
        ]);

        Page::find($id)->update([
            'chairman_speech' => $req->chairman_speech,
        ]);


        $photo = $req->file('chairman_speech_img');

        if ($photo) {
            $req->validate([
                'chairman_speech_img' => 'required|file|image|mimes:jpeg,jpg,png',
            ]);

            $old_photo_name = Page::find($id)->chairman_speech_img;
            // unlink('uploads/' . $old_photo_name);

            $photo_extention = $photo->getClientOriginalExtension();
            $photo_name = "chairman_speech_img." . $photo_extention;
            Image::make($photo)->save(base_path('public/uploads/' . $photo_name));

            Page::find($id)->update([
                'chairman_speech_img' => $photo_name,
            ]);
        }

        return back()->with('success', 'Data is updated Successfully');
    }
}
