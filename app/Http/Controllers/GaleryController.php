<?php

namespace App\Http\Controllers;

use App\Models\galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galery = Galery::all();
        return view('admin.galery.index', compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        $image = $request->file('image')->store('galery', 'public');

        Galery::create([
            'name' => $request->name,
            'image' => basename($image),
        ]);

        return redirect()->route('galery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galery = Galery::findOrFail($id);
        return view('admin.galery.edit', compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:4',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048'
        ]);

        $galery = Galery::findOrFail($id);


        if($request->hasFile('image')){
        $image = $request->file('image')->store('galery', 'public');
        $galery->image = basename($image);
        }

        $galery->name = $request->name;
        $galery->save();

        return redirect()->route('galery.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galery = Galery::findOrFail($id);
        $galery->delete();

        return redirect()->route('galery.index');
    }
}
