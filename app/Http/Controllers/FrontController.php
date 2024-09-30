<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Models\Destination;

class FrontController extends Controller
{
    public function index(){
        $destinations = Destination::paginate(3);
        // $subscriberCount = Subscriber::count();
        return view('front.home',compact('destinations'));
        
    }

//     public function getSubscriberCount(){

//     return Subscriber::count();
// }

    public function about(){
        return view('front.about');
    }

    public function contact(){

        return view('front.contact');
    }


    public function destination(){
        $alldestinations = Destination::get();
        $subscriberCount = Subscriber::count();
        return view('front.destination',compact('subscriberCount'),compact('alldestinations'));
    }
    public function singledestination(){
        $alldestinations = Destination::get();
        $subscriberCount = Subscriber::count();
        return view('front.singledestination',compact('subscriberCount'),compact('alldestinations'));
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
//     public function getSubscriberCount()
// {
//     return Subscriber::count();
// }
}
