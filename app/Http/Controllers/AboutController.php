<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Award;
use App\Models\Client;
use App\Models\HonoringGallery;
use App\Models\PersonalInformation;
use App\Models\Publication;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $publications = Publication::all();
        $clients = Client::all();
        $honoringGalleries = HonoringGallery::all();
        $personalInformation = PersonalInformation::first(); // Assuming there's only one
        $awards = Award::all();

        return view('front.about', compact('publications', 'clients', 'honoringGalleries', 'personalInformation', 'awards'));
    }
}
