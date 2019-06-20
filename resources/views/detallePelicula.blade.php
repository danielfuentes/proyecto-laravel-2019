@extends('layouts.main')
@section('content')
<main>
    <h2 class="__peliculasdeldia">Detalle de la Película</h2>

    <div class="__peliculas row">
      <div class="d-flex card col-12  __itempelicula" style="width: 18rem;">
        
        <div>
            titulo: {{$detalle->title}}
            <br>
            Rating: {{$detalle->rating}}
            <br>
            Premios: {{$detalle->awards}}
            <br>
            Fecha de creación: {{$detalle->release_date}}
            <br>
        </div>
        <a href="/proximosEstrenos">Volver</a>    
                
        
      </div>
        
  </main>        
@endsection

