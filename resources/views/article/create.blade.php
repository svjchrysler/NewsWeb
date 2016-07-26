@extends('layouts.app')

@section('content')
	<div class="container" style="padding:0;">
		
	
	{!! Form::open(['route' => 'article.store', 'method' => 'POST', 'files' => 'true', 'id' => 'form_article']) !!}
		<div id="contenido" style="background-color: #FFF;">
			<div class="container-fluid margin">
				<div class="row margin">
					<div class="col-md-12 margin">
						<div class="jumbotron">
							<div class="jumbotron position-header" style="position: relative; display: block;">
								<input type="file" id="header" class="position-header ocultar" style="position: absolute; opacity: 0;" name="header_file">
								<img class="jumbotron img-header margin" id="img-header" src="https://platzi.com/blog/wp-content/uploads/2016/07/Cover-Colo-React.jpg">								
							</div>					
						</div>
					</div>
				</div>
			</div>

			<div class="container" id="element">
				<div class="row">
					<div class="col-md-1 ocultar" id="edit-1">
						<div class="btn-group" role="group">
						    <button type="button" class="btn btn-default dropdown-toggle btn-option-title" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="img" src="http://image.flaticon.com/icons/svg/148/148781.svg" alt="">
						    </button>
						    <ul class="dropdown-menu">
						      	<li style="position: relative; display: block;">
						      		<a href="#" style="position: absolute; display: block; background-color: #FFF;" id="imagen">Imagen</a>
						      		<input type="file" style="position: absolute; opacity: 0;" id="filename" name="filename">
					    		</li>
					    		<li><a href="#">Parrafo</a></li>
						      	<li><a href="#" id="parrafo">Parrafo</a></li>
						      	<li><a href="#" id="titulo">Titulo</a></li>
						      	<li><a href="#" id="subtitulo">Subtitulo</a></li>
						    </ul>
						  </div>
					</div>
					<div class="col-md-11">
						<div contenteditable id="title-header" class="editable h1"></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fuild" style="background-color: #FFF;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<input type="hidden" name="user" value="{{ Auth::user()->id }}">
						<input type="hidden" name="title" id="title">
						<input type="hidden" name="content" id="content_html">
						<input type="hidden" name="photo" id="photo">
						<button type="submit" class="btn btn-success btn-lg btn-save">Publicar</button>
					</div>
				</div>
			</div>	
		</div>
		
	{!! Form::close() !!}
	</div>
@endsection

@section('script')
	{{ Html::script('js/app.js') }}
@endsection