<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Home;
use App\Models\Portfolio;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $homes = Home::all();
        $projects=Project::all();
$categories=Category::all();
$portfolioItems = Portfolio::with('category')->get();

        return view('front.index',compact('projects','categories','portfolioItems'));
    }
}
