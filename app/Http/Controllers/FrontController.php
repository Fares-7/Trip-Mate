<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Subscriber;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ContactRequest;
use App\Models\Guide;

class FrontController extends Controller
{
    public function index(){
        $destinations = Destination::latest()->take(6)->get();
        // $subscriberCount = Subscriber::count();
        return view('front.home',compact('destinations'));
        
    }

//     public function getSubscriberCount(){

//     return Subscriber::count();
// }

    public function about(){
        $guides = Guide::get();
        return view('front.about',compact('guides'));
    }

    public function contact(){

        return view('front.contact');
    }


    public function destination(){
        $alldestinations = Destination::paginate(4);
        $subscriberCount = Subscriber::count();
        return view('front.destination',compact('subscriberCount'),compact('alldestinations'));
    }
    public function singledestination($id ){
      
        $destination = Destination::find($id);
        // $subscriberCount = Subscriber::count();
        return view('front.singledestination', get_defined_vars());
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

    public function reservation($id){
        $user = Auth::user();
        if ($user->destinations()->where('destination_id', $id)->exists()) {
            return back()->with('status', 'You have already booked this trip.');
        }
        $user->destinations()->attach($id);
        return back()->with('success','Your trip has been booked successfully 💚');  

    }



}
