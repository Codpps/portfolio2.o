<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience = Experience::all();
        return view('admin.experience.index', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'year' => 'required'
        ]);

        Experience::create([
            'title' => $request->title,
            'description' => $request->description,
            'year' => $request->year,
        ]);

        return redirect()->route('experience.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $experience = Experience::find($id);
        return view('admin.experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'year' => 'required',
        ]);

        $experience = Experience::find($id);

        $experience->title = $request->title;
        $experience->description = $request->description;
        $experience->year = $request->year;
        $experience->save();
        return redirect()->route('experience.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();
        return redirect()->route('experience.index');
    }
}
