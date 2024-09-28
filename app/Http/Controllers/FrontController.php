<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.home');
    }

    public function about(){
        return view('front.about');
    }

    public function contact(){
        return view('front.contact');
    }


    public function destination(){
        return view('front.destination');
    }

    public function contactStore(ContactRequest $request){
        $data=$request->validated();
        Contact::create($data);
        return back()->with('success','Your Message sent Successfully');
    }
}
