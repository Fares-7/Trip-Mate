<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreGuideRequest;
use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admindashboard.guide.add' , get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuideRequest $request)
    {
        $data = $request->validated();
        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('guide', $newImageName, 'public');
        $data['image'] = $newImageName;
        Guide::create($data);
        return back()->with('add-guide', 'your Guide Added successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guide $guide)
    {
        Storage::delete("public/destination/$guide->image");
        $guide->delete();
        return back()->with('Deleted', 'your Guide Deleted successfuly');
    }
}
