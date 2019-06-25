<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use App\Project_Category_Relation;
use Illuminate\Http\Request;
use Session;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Admin_Panel/home');
    }

    public function addProject()
    {
        $categories = Category::all();
        return view('Admin_Panel/addProject')->with('categories', $categories);
    }

    public function get_projects(){
        $projects = Project::where('deleted_at', null);

        $datatables = Datatables::of($projects);
        return $datatables->make(true);
    }

    public function insertProject(Request $r)
    {
        $project = new Project();
        $project->project_name = $r->name;
        $project->project_desc = $r->desc;
        $project->project_website = $r->website;
        $project->created_at = date("Y-m-d H:i:s");
        $project->updated_at = date("Y-m-d H:i:s");
        $project->save();

        foreach ($r->category as $c){
            $category = new Project_Category_Relation();
            $category->fk_project_id = $project->project_id;
            $category->fk_category_id = $c;
            $category->save();
        }

        if ($r->hasFile('img1')) {
            $file = $r->file('img1');
            $fileName = $project->project_id ."1" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img1 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img2')) {
            $file = $r->file('img2');
            $fileName = $project->project_id ."2" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img2 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img3')) {
            $file = $r->file('img3');
            $fileName = $project->project_id ."3" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img3 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img4')) {
            $file = $r->file('img4');
            $fileName = $project->project_id ."4" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img4 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img5')) {
            $file = $r->file('img5');
            $fileName = $project->project_id ."5" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img5 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img6')) {
            $file = $r->file('img6');
            $fileName = $project->project_id ."6" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img6 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img7')) {
            $file = $r->file('img7');
            $fileName = $project->project_id ."7" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img7 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img8')) {
            $file = $r->file('img8');
            $fileName = $project->project_id ."8" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img8 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img9')) {
            $file = $r->file('img9');
            $fileName = $project->project_id ."9" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img9 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img10')) {
            $file = $r->file('img10');
            $fileName = $project->project_id ."10" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img10 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img11')) {
            $file = $r->file('img11');
            $fileName = $project->project_id ."11" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img11 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img12')) {
            $file = $r->file('img12');
            $fileName = $project->project_id . "_12" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img12 = $fileName;
            $project->save();
        }

        Session::flash('success_message', 'Project Inserted!');

        return back();
    }

    public function editProject($id)
    {
        $project = Project::where('project_id', $id)->first();
        $category = Project_Category_Relation::where('fk_project_id', $id)->get();
        $categories = Category::all();

        return view('Admin_Panel.editProject')->with('project', $project)
                                                   ->with('category_selected', $category)
                                                   ->with('categories', $categories);
    }

    public function updateProject(Request $r)
    {
        $project = Project::where('project_id', $r->id)->first();
        $project->project_name = $r->name;
        $project->project_desc = $r->desc;
        $project->project_website = $r->website;
        $project->updated_at = date("Y-m-d H:i:s");
        $project->save();

        Project_Category_Relation::where('fk_project_id', $r->id)->delete();

        foreach ($r->category as $c){
            $category = new Project_Category_Relation();
            $category->fk_project_id = $project->project_id;
            $category->fk_category_id = $c;
            $category->save();
        }

        if ($r->hasFile('img1')) {
            $file = $r->file('img1');
            $fileName = $project->project_id ."1" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img1 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img2')) {
            $file = $r->file('img2');
            $fileName = $project->project_id ."2" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img2 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img3')) {
            $file = $r->file('img3');
            $fileName = $project->project_id ."3" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img3 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img4')) {
            $file = $r->file('img4');
            $fileName = $project->project_id ."4" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img4 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img5')) {
            $file = $r->file('img5');
            $fileName = $project->project_id ."5" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img5 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img6')) {
            $file = $r->file('img6');
            $fileName = $project->project_id ."6" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img6 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img7')) {
            $file = $r->file('img7');
            $fileName = $project->project_id ."7" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img7 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img8')) {
            $file = $r->file('img8');
            $fileName = $project->project_id ."8" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img8 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img9')) {
            $file = $r->file('img9');
            $fileName = $project->project_id ."9" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img9 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img10')) {
            $file = $r->file('img10');
            $fileName = $project->project_id ."10" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img10 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img11')) {
            $file = $r->file('img11');
            $fileName = $project->project_id ."11" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img11 = $fileName;
            $project->save();
        }

        if ($r->hasFile('img12')) {
            $file = $r->file('img12');
            $fileName = $project->project_id . "_12" . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('files/project_image');
            $file->move($destinationPath, $fileName);
            $project->project_img12 = $fileName;
            $project->save();
        }

        Session::flash('success_message', 'Project Updated!');

        return back();
    }


    public function deleteProject(Request $r)
    {
        $project = Project::where('project_id', $r->id)->first();
        $project->deleted_at = date("Y-m-d H:i:s");
        $project->save();

        return back();
    }
}
