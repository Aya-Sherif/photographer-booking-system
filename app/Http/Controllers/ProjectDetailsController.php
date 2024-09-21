<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectDetail;
use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function index($id)
    {
        $project = Project::findOrFail($id);
        return view('front.project-details',compact('project'));
    }
}
