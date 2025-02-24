<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company =  Company::all();
        return view('admin.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'logo' => 'required|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required',
        ]);

        $logo = $request->file('logo')->store('company', 'public');

        Company::create([
            'name' => $request->name,
            'logo' => basename($logo),
            'description' => $request->description,
        ]);

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('admin.company.edit', compact('company'));
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

        $company = Company::findOrFail($id);

        if($request->hasFile('logo')){
        $logo = $request->file('logo')->store('company', 'public');
        $company->logo = basename($logo);
        }

        $company->name = $request->name;
        $company->description = $request->description;
        $company->save();

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect()->route('company.index');
    }
}
