<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\SubCategory;

class SubCategoryController extends Controller
{
	public function index() {
		
		return view('subcategory.index');
	}

	public function create() {
		$categories = Category::All();
		return view('subcategory.create')->with('categories', $categories);
	}

	public function store(Request $request) {
		$subcategory = new SubCategory();
		$subcategory->category_id = $request->category;
		$subcategory->title = $request->title;
		$subcategory->save();
		return redirect('/');
	}
}
