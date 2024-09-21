<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutPartsRequest;
use App\Models\HonoringGallery;
use Illuminate\Http\Request;

class HonoringGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $honoringGalleries = HonoringGallery::all();

        return view('admin.honoringGallery.index', compact('honoringGalleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.honoringGallery.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutPartsRequest $request)
    {

        // Assign values to portfolio array
        $honoringGallery['title'] = $request['title'];



        $imageName = '';

        if ($request['image']) {
            $image = $request->file('image');
            $imageName = '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('front/img/about/honoringGalleries/', $imageName);
        }

        $honoringGallery['image'] = $imageName;
        // dd($portfolio);
        HonoringGallery::create($honoringGallery);
        return redirect()->route("honoringGallery.index")->with('success', "Honor Added Successfully");
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
        $honoringGallery = HonoringGallery::findOrFail($id);
        // dd('222');
        return view('admin.honoringGallery.edit', compact('honoringGallery'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $honoringGallery = honoringGallery::findOrFail($id);

        $newhonoringGallery = $request->validate([
            'title' => 'required|string|min:3',
        ]);

        if ($request->hasFile('image')) {
            $imageName =   '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('front/img/about/honoringGalleries'), $imageName);
            $newhonoringGallery['image'] = $imageName;
        } else {

            $newhonoringGallery['image'] = $honoringGallery['image'];
        }

        $honoringGallery->update($newhonoringGallery);
        return redirect()->route("honoringGallery.index")->with('success', "Honor Updated Successfuly");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $honoringGallery = HonoringGallery::findOrFail($id);
        $honoringGallery->delete();
        return back();
    }
}
