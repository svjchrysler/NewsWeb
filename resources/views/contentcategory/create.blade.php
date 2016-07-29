@extends('layouts.app')

@section('content')
	{!! Form::open(['route' => 'content.store', 'method' => 'POST', 'id' => 'form_content']) !!}
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>

				<div class="col-md-8">
					<div class="panel panel-success">
			          <div class="panel-heading">Selecciona la categoria y subcategoria</div>
			          <div class="panel-body" style="padding-left:3em; padding-right:3em;">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="category">Categoria</label>
											<select name="category" id="category" class="form-control">
												@foreach($categories as $category) 
													<option value="{{ $category->id }}">{{ $category->title }}</option>
												@endforeach
											</select>
										</div>			
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="category">SubCategoria</label>
											<select name="subcategory" id="subcategory" class="form-control">
											</select>
										</div>					
									</div>
								</div>
							</div>
			          </div>
			        </div>
				</div>

				<div class="col-md-2"></div>
			</div>

			<div class="row">
				<div id="contenido" style="background-color: #FFF;">
					<div class="container fluid" id="element">
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
								<input type="hidden" name="title" id="title">
								<input type="hidden" name="content" id="content_html">
								<button type="submit" class="btn btn-primary btn-lg btn-save">Publicar</button>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	{!! Form::close() !!}

@endsection