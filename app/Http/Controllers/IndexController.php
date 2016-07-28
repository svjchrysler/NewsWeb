<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

use App\Category;

use DB;

class IndexController extends Controller
{
	public function index() {

		$array = array();

		$articles = DB::table('articles')->select('articles.id', 'articles.title', 'articles.publicationDate')
										->orderby('articles.created_at', 'desc')
										->get();

		$categories = Category::All();

		array_push($array, $articles);

		array_push($array, $categories);
		return view('welcome')->with('array', $array);
		//return view('welcome');
	}

	public function about() {
		return view('about_us');
	}

	public function history() {
		return view('history');
	}

	public function visualizador()
	{
		return view('visualizador');
	}

}
