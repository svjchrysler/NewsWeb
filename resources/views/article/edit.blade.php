@extends('layouts.app')

@section('style')
	{{ Html::style('css/auxChange.css') }}
@endsection

@section('content')
	<div class="container" style="background-color: #FFF;">
		<br>
		<?= $article->content; ?>	
		<br>
	</div>
	
@endsection

@section('script')
	{{ Html::script('js/auxChange.js') }}
@endsection