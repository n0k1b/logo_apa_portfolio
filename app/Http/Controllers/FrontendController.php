<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    function index()
    {
        $projects = Project::with('type')->get();
        $types = Type::all();
        return view('index', ['projects' => $projects, 'types' => $types]);
    }
}
