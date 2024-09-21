<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photos;
use App\Models\Project;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function edit(string $id)
    {
        //
        $photos = Photos::where('project_id', $id)->get();
        $project=Project::findOrFail($id);
        return view('admin.project.editprojectphotos',compact('photos','project'));

    }
    public function destroyPhoto(string $id)
    {
        //
        // dd($id);
        Photos::destroy($id);
        return back();

    }
}
