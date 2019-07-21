<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use App\Project_Category_Relation;
use Illuminate\Http\Request;
use Session;

class SiteController extends Controller
{
    public function index()
    {
        $project = Project::where('deleted_at', null)->paginate(6);
        $category = Category::all();
        $project_category = Project_Category_Relation::leftJoin('category','category.category_id', 'project_category_relation.fk_category_id')->get();

        return view('Site/index')->with('category', $category)
                                      ->with('projects', $project)
                                      ->with('project_category', $project_category);
    }

    public function project_details($id)
    {
        $project = Project::findOrFail($id);
        return view('Site.project_details')->with('project', $project);
    }

    public function team()
    {
        return view('Site/team');
    }

    public function contact()
    {
        return view('Site/contact');
    }

    public function send_msg(Request $r)
    {
        $name = $r->name;
        $email = $r->email;
        $message = $r->message;
        $location = $r->location;
        $subject = $r->subject;

        $formcontent="From: [".$name."]\n\n"."Message:\n".$message."\n\nLocation: (".$location.")\n\n\n\nWish You All The Best TECHmet..!!!\n";
        $recipient = "inbox@techmetbd.com";
        $mailheader = "From: $email \r\n";

        if(mail($recipient, $subject, $formcontent, $mailheader))
        {
            Session::flash('success_message', 'Your message has been sent');
        }
        else
        {
            Session::flash('success_message', 'Unable to send your message. Please Try Again.');
        }

        return back();
    }

    public function companyProfile(){
        return view('Site.companyProfile');
    }

    public function showProjects(){

        $project = Project::where('deleted_at', null)->get();
        $category = Category::all();
        $project_category = Project_Category_Relation::leftJoin('category','category.category_id', 'project_category_relation.fk_category_id')->get();

        return view('Site/allprojects')->with('category', $category)
                                            ->with('projects', $project)
                                            ->with('project_category', $project_category);
    }

}
