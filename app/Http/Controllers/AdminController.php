<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Admin;

class AdminController extends Controller
{
    //
    function view_create_project()
    {
        $projects = Project::with('type')->get();
        $types = Type::all();
        return view('admin.create-project', ['projects' => $projects, 'types' => $types]);
    }
    function create_project(Request $req)
    {
        $project = new Project();
        $project->title = $req->input('title');
        $project->subtitle = $req->input('subtitle');
        $project->description = $req->input('description');
        $project->completed_at = $req->input('completed_at');
        //dd($req);
        $img_name = time() . '.' . $req->file('image')->getClientOriginalExtension();
        $req->file('image')->move(public_path('../assets/uploads/projects') , $img_name);
        $project->image = $img_name;
        $project->type_id = (int)$req->input('type');

        $project->save();

        session()->flash('success', 'Project created successfully');
        return back();
    }
    function delete_project($id)
    {
        Project::where('id', $id)->delete();
        return back();
    }
    function view_login()
    {
        return view('admin.login');
    }
    function login(Request $req)
    {
        $admin = Admin::where('email', $req->input('email'))->first();
        //dd($admin);
        if($admin === null) {
            session()->flash('error', 'Wrong username or password');
            return back();
        } else {
            if($admin->password !== $req->input('password')) {
                session()->flash('error', 'Wrong username or password');
                return back();
            } else {
                session()->put('id', $admin->id);
                session()->put('email', $admin->email);
                return redirect()->route('index');
            }
        }
    }
    function logout()
    {
        session()->flush();
        return redirect()->route('index');
    }
    function view_edit_project($id)
    {
        $project = Project::where('id', $id)->first();
        $projects = Project::with('type')->get();
        $types = Type::all();
        return view('admin.edit-project', ['project' => $project, 'projects'=> $projects, 'types' => $types]);
    }
    function edit_project(Request $req)
    {
        $project = Project::where('id', $req->input('id'))->first();
        $project->title = $req->input('title');
        $project->subtitle = $req->input('subtitle');
        $project->description = $req->input('description');
        $project->completed_at = $req->input('completed_at');
        //dd($req);
        if($req->file('image') !== null) {
            $img_name = time() . '.' . $req->file('image')->getClientOriginalExtension();
            $req->file('image')
            ->move(public_path('../assets/uploads/projects') , $img_name);

            $project->image = $img_name;
        }

        $project->type_id = (int)$req->input('type');

        $project->save();

        session()->flash('success', 'Project created successfully');
        return back();
    }
}
