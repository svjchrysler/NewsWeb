@extends('layouts.app')

@section('style')
	{{ Html::style('css/auxChange.css') }}
@endsection

@section('content')
	
	<div class="container" style="background-color: #FFF;">
		<div class="row">
		<br>
			<div class="col-md-3">
				<div class="panel panel-success">
		          <div class="panel-heading">Sub Categorias</div>
		          <div class="panel-body">
		            <ul class="list-unstyled">
						@foreach($subcategories as $subcategory)
							<li style="list-style:none; background-color: #009688; margin-bottom:.5em; padding:1em;"><strong style="color:#FFF;">{{ $subcategory->title }}</strong></li>
							<ul class="list-unstyled" style="padding-left:1em;">
								<?php $contents = DB::table('content_categories')->join('sub_categories', 'content_categories.subcategory_id', '=', 'sub_categories.id')->where('sub_categories.id', '=', $subcategory->id)->select('content_categories.*')->get(); ?>
								@foreach($contents as $content)
									<li style="list-style:none; background-color: #03A9F4; margin-bottom:.5em; padding:1em;"><a href="#" style="color: #FFF; font-weight: 700; text-decoration:none;" onclick="agregar_contenido({{ $content->id }})">{{ $content->title }}</a></li>
								@endforeach
							</ul>
						@endforeach
					</ul>
		          </div>
		        </div>				
				
			</div>
			<div class="col-md-9" style="padding-left:0;">
					<div class="container-fluid" id="container-padre" style="padding:0;">
						
					</div>
				<br>
			</div>
		</div>
	</div>

@endsection

@section('script')
	{{ Html::script('js/auxChange.js') }}
@endsection