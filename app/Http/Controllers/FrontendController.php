<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Counter;
use App\Models\Diarie;
use App\Models\Logo;
use App\Models\Portfolio;
use App\Models\Slider;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend', [

            'sliders' => Slider::where('action', 1)->get(),
            'diarie' => Diarie::where('action', 1)->get(),
            'portfolio' => Portfolio::all(),
            'counter' => Counter::all(),
        ]);
    }



    // contact form
    public function contact(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'address' => 'required',
        ]);

        $subject = 'Contact Page Message';
        $admin_data = 'sahosridoychuadanga329050@gmail.com';

        $data = 'Name : '.$request->name.'<br>';
        $data .= 'Phone : '.$request->phone.'<br>';
        $data .= 'Email : '.$request->email.'<br>';
        $data .= 'Address : '.$request->address.'<br>';
        $data .= 'Message : '.$request->message;

        Mail::to($admin_data)->send(new ContactMail($data));
        return back()->with('success', 'done');
    }

    public function contact_us(){
        return view('contact_us', []);
    }

    public function md_speech(){
        return view('md_speech', []);
    }
    public function chairman_speech(){
        return view('chairman_speech', []);
    }
    public function gallery(){
        return view('gallery', []);
    }
    public function about(){
        return view('about', []);
    }

}
