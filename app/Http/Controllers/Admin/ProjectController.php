<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Photos;
use App\Models\Project;
use Google\Service\AIPlatformNotebooks\Resource\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.project.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
        $project = [
            'title' => $request['title'],
            'description' => $request['description']
        ];
        $project =  Project::create($project);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName =  '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('front/img/project'), $imageName);
                $photo = new Photos();
                $photo->image = $imageName;
                $photo->project_id = $project->id;
                $photo->save();
            };
        }
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
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
$project=Project::findOrFail($id);
        return view('admin.project.edit',compact('project'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, string $id)
    {
        //
        $project=Project::findOrFail($id);
        $Newproject = [
            'title' => $request['title'],
            'description' => $request['description']
        ];
        $project->update($Newproject);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName =   '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('front/img/project'), $imageName);
                $photo = new Photos();
                $photo->image = $imageName;
                $photo->project_id = $id;
                $photo->save();
            };
        }
        return redirect()->route('projects.index')->with('success', 'Project Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Project::destroy($id);
        return back();

    }

}
