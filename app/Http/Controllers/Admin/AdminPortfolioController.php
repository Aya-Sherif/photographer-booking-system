<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageUplodeRequest;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $photos=Portfolio::all();
        return view('admin.photo.index',compact('photos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories=Category::all();
        return view('admin.photo.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImageUplodeRequest $request)
    {
            // Assign values to portfolio array
            $portfolio['name'] = $request['name'];
            $portfolio['style'] = $request['style'];


            if ($request['category_id'] == 0) {
                $portfolio['category_id'] = null;
            } else {
                $portfolio['category_id'] = $request['category_id'];
            }

            $imageName = '';

            if ($request['image']) {
                $image = $request->file('image');
                $imageName = '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('front/img/portfolio/', $imageName);
            }

            $portfolio['image'] = $imageName;
// dd($portfolio);
            Portfolio::create($portfolio);
            return redirect()->route("photos.index")->with('success', "Photo Added Successfully");


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
        $categories=Category::all();

        $photo=Portfolio::findOrFail($id);
        return view('admin.photo.edit',compact('photo','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $photo=Portfolio::findOrFail($id);

        $portfolio = $request->validate([
            'name' => 'required|string|min:3',
        ]);
        $portfolio['style']=$request['style'];

        if($request['category_id']==0)
        {
            $portfolio[ 'category_id']=null;
        }
        else{
            $portfolio['category_id']=$request['category_id'];

        }
         $portfolio['image']=$photo['image'];

         $photo->update($portfolio);
        return redirect()->route("photos.index")->with('success',"Photo Edited Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Portfolio::destroy($id);
        return back();

    }

}
