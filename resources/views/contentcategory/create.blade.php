@extends('layouts.app')

@section('content')
	{!! Form::open(['route' => 'subcategory.store', 'method' => 'POST']) !!}
		<div class="container">
			<div class="row">
				<div class="col-md-2">

				</div>

				<div class="col-md-8">
					<div class="panel panel-primary">
			          <div class="panel-heading">Categoria</div>
			          <div class="panel-body" style="padding-left:3em; padding-right:3em;">
							<div class="form-group">
								<label for="category">Categoria</label>
								<select name="category" id="category" class="form-control">
									@foreach($categories as $category) 
										<option value="{{ $category->id }}">{{ $category->title }}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group">
								<label for="category">Categoria</label>
								<select name="subcategory" class="form-control">
									
								</select>
							</div>					

							
			          </div>
			        </div>
				</div>

				<div class="col-md-2">
					
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
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
						<button type="submit" class="btn btn-primary btn-lg btn-save">Publicar</button>
					</div>
				</div>
			</div>	
		</div>
				</div>
			</div>
		</div>
	{!! Form::close() !!}

@endsection