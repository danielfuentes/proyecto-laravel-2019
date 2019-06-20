@extends('layouts.main')
@section('content')
<main>
    <h2 class="__peliculasdeldia">Listado de próximos estrenos</h2>

    <div class="__peliculas row">
      <div class="d-flex card col-12  __itempelicula" style="width: 18rem;">
        <ul>
            @foreach ($peliculas as $pelicula)
                <li>
                    <a href="/detallePelicula/{{$pelicula->id}}">{{$pelicula->title}}</a> 
                            
                </li>
            @endforeach     
        </ul>
        <p>
            {{$peliculas->links()}}
        </p>
        
        
      </div>
        
  </main>        
@endsection