<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ContentCategory;

use App\Category;

use App\SubCategory;

class ContentController extends Controller
{
	public function create() {
		$categories = Category::All();
		return view('contentcategory.create')->with('categories', $categories);
	}

	public function store() {

	}
}
