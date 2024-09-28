<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class BackController extends Controller
{
    public function table(){
        $data = Contact::paginate(3);
        return view('admindashboard.contactsTable',compact('data'));
    }
}
