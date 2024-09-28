<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        // return view('front.home');
        return view('admindashboard.master');
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

    public function store(Request $request){
        $data = $request->validate([
                'email'=>'required|email|unique:Subscribers,email'
            ]);
       
        Subscriber::create($data);
        return back()->with('status','Done💚');        

    }
}
