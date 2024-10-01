<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use Illuminate\Container\Attributes\Storage;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destination::paginate(10);
        return view('admindashboard.destination.show' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admindashboard.destination.create' , get_defined_vars());
    }

    /**
     * Store a newly created resource in stoage.
     */
    public function store(StoreDestinationRequest $request)
    {
        $data = $request->validated();
        // dd($data);
        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('destination', $newImageName, 'public');
        $data['image'] = $newImageName;
        Destination::create($data);
        return to_route('admin.destination.index')->with('success', 'your destination created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        return view('admindashboard.destination.edit' ,compact('destination'));
    }

    /**
     * Update the specified resource in storage. 
     */
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        $data = $request->validated();
        if ($request->hasFile('image')){
            //delete old image
            Storage::delete("public/destination/$destination->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('destination', $newImageName, 'public');
            $data['image'] = $newImageName;
        }
        $destination->update($data);
        return to_route('admin.destination.show')->with('Updated', 'your destination Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        Storage::delete("public/destination/$destination->image");
        $destination->delete();
        return to_route('admin.destination.show')->with('Deleted', 'your destination Deleted successfuly');
    }
}
