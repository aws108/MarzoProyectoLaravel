@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:20px">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Modificar producto
				</h3>
			</div>

			<div class="panel-body" style="padding:30px">
			
				<!--Abrir formulario-->
				<form action="{{url('/catalog')}}/{{$id}}" method="POST">
					<!--Enviar or PUT-->
					{{method_field('PUT')}}
					 <!--Protección contra CSRF-->
					 {{ csrf_field() }} 	
    
    				<div class="form-group">
    					<label for="title">Nombre</label>
    					<input type="text" name="title" id="title" class="form-control">
					</div>

					<div class="form-group">
						<!--Completa el input para el año -->
						<label for="year">Categoría</label>
						<br/>
						<input type="text" name="year" id="year" class="form-control">
					</div>

					<div class="form-group">
						<!--Completa el input para el director -->
						<label for="director">Precio</label>
						<br/>
						<input type="text" name="director" id="director" class="form-control">
					</div>

					<div class="form-group">
						<!--Completa el input para el poster -->
						<label for="poster">Poster</label>
						<br/>
						<input type="text" name="poster" id="poster" class="form-control">
					</div>

					<div class="form-group">
						<label for="synopsis">Resumen</label>
    					<textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Modificar producto
						</button>
					</div>
				<!--Cerrar formulario-->
				</form>

			</div>
		</div>
	</div>
</div>
@stop
