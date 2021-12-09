<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Diarie;
use App\Models\Logo;
use App\Models\Portfolio;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend', [
            'logo' => Logo::find(1),
            'sliders' => Slider::all(),
            'diarie' => Diarie::all(),
            'portfolio' => Portfolio::all(),
        ]);
    }

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
}
