<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //

    public function index()
    {
        // Fetch all categories
        $categories = Category::whereHas('photos')->get();


        // Fetch all portfolio items, with their related category data
        $portfolioItems = Portfolio::with('category')->orderBy('created_at', 'desc') // Order by the created_at column
            ->get();

        // Return view with categories and portfolio items
        return view('front.portfolio', compact('categories', 'portfolioItems'));
    }
}
