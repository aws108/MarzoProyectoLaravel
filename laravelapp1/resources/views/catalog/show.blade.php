@extends('layouts.master')

@section('content')

    <div class="row">

    <div class="col-sm-4">

        <img src="{{$pelicula['poster']}}" style="height: 300px"/>

    </div>
    <div class="col-sm-8">

        <h2 style="min-height: 45px;margin: 5px 0 10px 0">
        	{{$pelicula['title']}}
		</h2>

		<h4 style="min-height: 45px;margin: 5px 0 10px 0">
        	Año: {{$pelicula['year']}}
		</h4>

		<h4 style="min-height: 45px;margin: 5px 0 10px 0">
        	Director: {{$pelicula['director']}}
		</h4>

		<h4 style="min-height: 45px;margin: 5px 0 10px 0">
        	<b>Resumen</b>: {{$pelicula['synopsis']}}
		</h4>
		
		<?php if ("{$pelicula['rented']}"==0): ?>
			<h4 style="min-height: 45px;margin: 5px 0 10px 0" </h4> 
			<p><b>Estado:</b> El producto se ha agotado</p>
		<?php else: ?>
			<h4 style="min-height: 45px;margin: 5px 0 10px 0" </h4> 
			<p><b>Estado: </b>Queda producto en el almacén</p>
		<?php endif ?>
		
		<button type="button" class="btn btn-danger">Devolver Producto</button>
	<button type="button" class="btn btn-warning" onclick="location.href='{{$pelicula['id']}}/edit'">
		<span class="glyphicon glyphicon-pencil"></span> Editar producto</button>
		<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span>Volver al listado</button>
		
	<!--<button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/catalog/{{$id}}/edit'">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Editar peli</button>-->
		
		<!--<php endif ?> -->
		<!--<h4 style="min-height: 45px;margin: 5px 0 10px 0"> 
        	<b>Listado</b>: {{$pelicula['rented']}}
		</h4> -->
		
    </div>
</div>

@stop
