<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutPartsRequest;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $awards = Award::all();

        return view('admin.award.index', compact('awards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.award.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutPartsRequest $request)
    {
        //
        // Assign values to portfolio array
        $award['title'] = $request['title'];



        $imageName = '';

        if ($request['image']) {
            $image = $request->file('image');
            $imageName = '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('front/img/about/awards/', $imageName);
        }

        $award['image'] = $imageName;
        // dd($portfolio);
        Award::create($award);
        return redirect()->route("awards.index")->with('success', "Award Added Successfully");
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
        $award = Award::findOrFail($id);
        // dd('222');
        return view('admin.award.edit', compact('award'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $award = Award::findOrFail($id);

        $newaward = $request->validate([
            'title' => 'required|string|min:3',
        ]);

        if ($request->hasFile('image')) {
            $imageName =   '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('front/img/about/awards'), $imageName);
            $newaward['image'] = $imageName;
        } else {

            $newaward['image'] = $award['image'];
        }

        $award->update($newaward);
        return redirect()->route("awards.index")->with('success', "Award Updated Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $award = Award::findOrFail($id);
        $award->delete();
        return back();
    }
}
