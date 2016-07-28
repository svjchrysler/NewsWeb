<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class CategoryController extends Controller
{

	public function create() {
		return view('category.create');
	}

	public function store(Request $request) {
    	$category = new Category();
    	$category->user_id = $request->user;
    	$category->title = $request->title;
    	$category->image = $request->imagefile;
    	$category->save();
    	return redirect('/');
    }
}
