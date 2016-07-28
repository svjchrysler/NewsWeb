@extends('layouts.app')

@section('content')
	<div class="container" style="background-color:#FFF;">
		<h2 class="text-center">Categorias</h2>
		<div class="row">
			<div class="col-md-12" style="padding-left:5em; padding-right:5em;">
				<table class="table table-striped table-bordered" >
					<tr>
						<th>Categoria</th>
						<th>Agregar</th>
					</tr>
					@foreach($categories as $category)
					<tr>
						<td>{{ $category->title }}</td>
						<td><a href="{{ url('subcategory/create') }}">Agregar Subcategoria</a></td>
					</tr>
					@endforeach

				</table>
			</div>
		</div>
	</div>
@endsection