<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use App\Models\Experience;
use App\Models\Tech;
use App\Models\Work;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $experience = Experience::all();
        $tech = Tech::all();
        $contact = Contact::all();
        $company = Company::all();
        $work = Work::all();
        return view('welcome', compact('experience', 'tech', 'contact', 'company', 'work'));
    }

    public function show($id)
    {
        $work = Work::findOrFail($id);
        return view('show', compact('work'));
    }
}
