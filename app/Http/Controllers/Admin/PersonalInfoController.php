<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonalInfoRequest;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personalInformation = PersonalInformation::first(); // Assuming there's only one


        return  view('admin.personalInfo.index', compact('personalInformation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.personalInfo.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonalInfoRequest $request)
    {
        //

        //
        $personalinfo = [
            'headline' => $request['headline'],
            'body' => $request['body']
        ];
        $imageName = '';

        if ($request['photo_path']) {
            $image = $request->file('photo_path');
            $imageName = '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('front\img\about' . "\"", $imageName);
        }
        $personalinfo['photo_path'] = $imageName;
        // dd($portfolio);
                    PersonalInformation::create($personalinfo);
                    return redirect()->route("personalinfo.index")->with('success', "Photo Added Successfully");
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
        $personalinfo=PersonalInformation::findOrFail($id);
        return  view('admin.personalInfo.edit', compact('personalinfo'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $Personalinfo=PersonalInformation::findOrFail($id);

        $newPersonalinfo = $request->validate([
            'headline' => 'required|string|min:3',
            'body'=>'required|string|min:3'
        ]);

        if ($request->hasFile('photo_path')) {
                $imageName =   '_' . uniqid() . '.' . $$request->file('photo_path')->getClientOriginalExtension();
                $request->file('photo_path')->move(public_path('front/img/project'), $imageName);
                $newPersonalinfo['photo_path'] = $imageName;
        }
        else    {

            $newPersonalinfo['photo_path']=$Personalinfo['photo_path'];
        }

         $Personalinfo->update($newPersonalinfo);
        return redirect()->route("personalinfo.index")->with('success',"Info Updated Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
