@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">

			<div class="panel panel-primary">
	          <div class="panel-heading">Estadisticas</div>
	          <div class="panel-body" style="padding:3em;">
	            {!! Form::open(['route' => 'subcategory.store', 'method' => 'POST']) !!}
					<div class="form-group">
						<label for="category">Categoria</label>
						<select name="category" class="form-control">
							@foreach($categories as $category) 
								<option value="{{ $category->id }}">{{ $category->title }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="title">Nombre</label>
						<input type="text" name="title" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" value="Guardar" class="btn btn-success">
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
