@extends('layouts.main')
@section('content')
    <h2 class="__peliculasdeldia">Administración de las Películas</h2>
    <br>
    <a href="/createMovie">Incluir una película</a>    
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre de la Película</th>
               
                <th>Ver</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($peliculas as $pelicula)
                <tr>
                <td>{{$pelicula->id}}</td>
                    <td>{{$pelicula->title}}</td>
                    
                
                    <td><a href="/showMovie/{{$pelicula->id}}">Ver</a></td>
                    <td><a href="/editMovie/{{$pelicula->id}}">Editar</a></td>    
                    <td><a href="/deleteMovie/{{$pelicula->id}}">Borrar</a></td>
                </tr>
                @endforeach
        </tbody>

    </table>

@endsection