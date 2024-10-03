<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user  = Auth::user();
        $destinations = $user->destinations;
        // dd($destinations);
        return view('front.myreservation' , get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        // dd($id);
        $reservation = Auth::user()->destinations()->wherePivot('id', $id);
        Auth::user()->destinations()->detach($id);
        // dd($reservation);
        // $id->delete();
        return back()->with('success', 'Reservation canceled successfully.');
    }
}
;