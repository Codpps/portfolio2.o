<?php

namespace App\Http\Controllers;

use App\Models\Tech;
use Illuminate\Http\Request;

class TechController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tech = Tech::all();
        return view('admin.tech.index', compact('tech'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tech.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'logo' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required',
        ]);

        $logo = $request->file('logo')->store('tech', 'public');

        Tech::create([
            'name' => $request->name,
            'logo' => basename($logo),
            'description' => $request->description,
        ]);

        return redirect()->route('tech.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tech $tech)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tech = Tech::findOrFail($id);
        return view('admin.tech.edit', compact('tech'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required',
        ]);

        $tech = tech::findOrFail($id);

        if($request->hasFile('logo')){
        $logo = $request->file('logo')->store('tech', 'public');
        $tech->logo = basename($logo);
        }

        $tech->name = $request->name;
        $tech->description = $request->description;
        $tech->save();

        return redirect()->route('tech.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tech = tech::findOrFail($id);
        $tech->delete();
        return redirect()->route('tech.index');
    }
}
