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
        $projects = Project::all();
        $categories = Category::whereHas('photos')->get();
        $portfolioItems = Portfolio::with('category')
            ->orderBy('created_at', 'desc') // Order by the created_at column
            ->take(21) // Limit to 10 items
            ->get();

        return view('front.index', compact('projects', 'categories', 'portfolioItems'));
    }
}
