<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

use Carbon\Carbon;

use DB;

class ArticleController extends Controller
{
	public function create()
	{
		return view('article.create');
	}

	public function index() {
		return 'index';
	}

	public function store(Request $request) {
		$article = new Article();
		$article->user_id = $request->user;
		$article->title = $request->title;
		$article->content = $request->content;
		$article->photo = $request->photo;
		$article->paragraph = $request->paragraph;
		$date = Carbon::now();
		$article->publicationDate = $date->format('Y-m-d');
		$article->save();
		return redirect('/');
	}

	public function news($id) {
		$article = Article::Find($id);
		return view('article.edit')->with('article', $article);
	}
}
