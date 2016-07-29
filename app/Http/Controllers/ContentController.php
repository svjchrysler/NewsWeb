<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;

use App\ContentCategory;

use App\Category;

use App\SubCategory;

use DB;

class ContentController extends Controller
{

	public function index($id) {
		$subcategories = SubCategory::where('category_id', '=', $id)->get();
		return view('contentcategory.index')->with('subcategories', $subcategories);
	}

	public function create() {
		$categories = DB::table('categories')
							->join('sub_categories', 'categories.id', '=', 'sub_categories.category_id')
							->select('categories.title', 'categories.id')
							->groupBy('categories.title', 'categories.id')
							->get();
		return view('contentcategory.create')->with('categories', $categories);
	}

	public function store(Request $request) {
		$content = new ContentCategory();
		$content->subcategory_id = $request->subcategory;
		$content->title = $request->title;
		$content->content = $request->content;
		$date = Carbon::now();
		$content->publicationDate = $date->format('Y-m-d');
		$content->save();
		return redirect('/');
	}

	public function show($id) {
		$content = ContentCategory::Find($id);
		return $content;
	}
}
