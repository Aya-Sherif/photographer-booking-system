<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutPartsRequest;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publiations = Publication::all();

        return view('admin.publication.index', compact('publiations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.publication.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutPartsRequest $request)
    {

        // Assign values to portfolio array
        $publication['title'] = $request['title'];



        $imageName = '';

        if ($request['image']) {
            $image = $request->file('image');
            $imageName = '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('front/img/about/publication/', $imageName);
        }

        $publication['image'] = $imageName;
        // dd($portfolio);
        Publication::create($publication);
        return redirect()->route("publications.index")->with('success', "Publication Added Successfully");
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
        $publication = Publication::findOrFail($id);
        // dd('222');
        return view('admin.publication.edit', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $publication = Publication::findOrFail($id);

        $newpublication = $request->validate([
            'title' => 'required|string|min:3',
        ]);

        if ($request->hasFile('image')) {
            $imageName =   '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('front/img/about/publication'), $imageName);
            $newpublication['image'] = $imageName;
        } else {

            $newpublication['image'] = $publication['image'];
        }

        $publication->update($newpublication);
        return redirect()->route("publications.index")->with('success', "Publication Updated Successfuly");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $publication = Publication::findOrFail($id);
        $publication->delete();
        return back();
    }
}
