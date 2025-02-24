<?php

namespace App\Http\Controllers;

use App\Models\Tech;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $works = Work::with('teches')->get(); // Ambil semua works beserta teches
    return view('admin.work.index', compact('works'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tech = Tech::all();
        return view('admin.work.create', compact('tech'));
    }

    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        'tech_id' => 'required|array',
        'tech_id.*' => 'exists:teches,id',
    ]);

    $photo = $request->file('photo')->store('work', 'public');

    $work = Work::create([
        'title' => $request->title,
        'description' => $request->description,
        'photo' => basename($photo),
    ]);

    // Simpan relasi many-to-many di tabel pivot
    $work->teches()->attach($request->tech_id);

    return redirect()->route('work.index')->with('success', 'Work created successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $work = Work::findOrFail($id);
        $tech = Tech::all();
        return view('admin.work.edit', compact('work','tech'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $work = Work::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'tech_id' => 'array',
    ]);

    // Update basic fields
    $work->title = $request->title;
    $work->description = $request->description;

    // Handle photo upload
    if ($request->hasFile('photo')) {
        // Delete old photo if exists
        if ($work->photo && file_exists(public_path('storage/work/' . $work->photo))) {
            unlink(public_path('storage/work/' . $work->photo));
        }

        // Store new photo
        $photoPath = $request->file('photo')->store('work', 'public');
        $work->photo = basename($photoPath);
    }

    $work->save();

    // Sync technologies
    $work->teches()->sync($request->tech_id ?? []);

    return redirect()->route('work.index')->with('success', 'Work updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $work = Work::findOrFail($id);
    $work->delete();

    return redirect()->route('work.index')->with('success', 'Work updated successfully!');
    }
}
