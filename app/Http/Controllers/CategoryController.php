<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    public function categorty(){
        $category = Category::all();
        return view('Admin_Panel.Category.categorylist')->with('category', $category);
    }

    public function insert_categorty(Request $r){
        $category = new Category();
        $category->category = $r->name;
        $category->save();

        Session::flash('success_message', 'Category Inserted!');

        return back();
    }

    public function edit_categorty(Request $r){
        $category = Category::findOrFail($r->id);

        return view('Admin_Panel.Category.editCategory')->with('category', $category);
    }

    public function update_categorty(Request $r){
        $category = Category::findOrFail($r->id);
        $category->category = $r->name;
        $category->save();

        Session::flash('success_message', 'Category Updated!');

        return back();
    }

    public function delete_categorty(Request $r){
        $category = Category::findOrFail($r->id);
        $category->delete();

        return back();
    }
}
