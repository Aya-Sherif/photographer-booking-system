<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutPartsRequest;
use App\Http\Requests\ClientsRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = Client::all();

        return view('admin.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.client.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientsRequest $request)
    {
        //
          //
        // Assign values to portfolio array
        $client['name'] = $request['name'];



        $imageName = '';

        if ($request['image']) {
            $image = $request->file('image');
            $imageName = '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('front/img/about/clients/', $imageName);
        }

        $client['image'] = $imageName;
        // dd($portfolio);
        Client::create($client);
        return redirect()->route("clients.index")->with('success', "Client Added Successfully");

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

        $client = Client::findOrFail($id);
        // dd('222');
        return view('admin.client.edit', compact('client'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //
         $client = Client::findOrFail($id);

         $newclient = $request->validate([
             'name' => 'required|string|min:3',
         ]);

         if ($request->hasFile('image')) {
             $imageName =   '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
             $request->file('image')->move(public_path('front/img/about/clients'), $imageName);
             $newclient['image'] = $imageName;
         } else {

             $newclient['image'] = $client['image'];
         }

         $client->update($newclient);
         return redirect()->route("clients.index")->with('success', "Client Updated Successfuly");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $client = Client::findOrFail($id);
        $client->delete();
        return back();
    }
}
