@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">

			<div class="panel panel-success">
	          <div class="panel-heading">Estadisticas</div>
	          <div class="panel-body" style="padding:3em;">
	            {!! Form::open(['route' => 'category.store', 'method' => 'POST', 'files' => 'true', 'id' => 'form_category']) !!}
					<div class="form-group">
						<label for="title">Nombre</label>
						<input type="text" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label for="title">Imagen</label>
						<input type="file" name="image" id="fileimage" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" value="Guardar" class="btn btn-success">
						<input type="hidden" name="user" value="{{ Auth::user()->id }}">
						<input type="hidden" name="imagefile" id="image-cargar">
					</div>

				{!! Form::close() !!}
	          </div>
	        </div>
				
			</div>

			<div class="col-md-2">
				
			</div>
		</div>
	</div>
			
@endsection