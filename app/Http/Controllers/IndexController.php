<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

use DB;

class IndexController extends Controller
{
	public function index() {
		$articles = DB::table('articles')->select('articles.id', 'articles.title', 'articles.photo', 'articles.publicationDate')
										->orderby('articles.created_at', 'desc')
										->get();
		return view('welcome')->with('articles', $articles);
		//return view('welcome');
	}

	public function about() {
		return view('about_us');
	}

	public function history() {
		return view('history');
	}

}
