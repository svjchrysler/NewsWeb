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
		            <ul>
						@foreach($subcategories as $subcategory)
							<li>{{ $subcategory->title }}</li>
							<ul>
								<?php $contents = DB::table('content_categories')->join('sub_categories', 'content_categories.subcategory_id', '=', 'sub_categories.id')->where('sub_categories.id', '=', $subcategory->id)->select('content_categories.*')->get(); ?>
								@foreach($contents as $content)
									<li><a href="#" onclick="agregar_contenido({{ $content->id }})">{{ $content->title }}</a></li>
								@endforeach
							</ul>
						@endforeach
					</ul>
		          </div>
		        </div>				
				
			</div>
			<div class="col-md-9">
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