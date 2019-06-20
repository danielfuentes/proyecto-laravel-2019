<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class AdminMovieController extends Controller
{
    public function index(){
        $peliculas = Movie::all();
        return view('movies.index')->with('peliculas',$peliculas);
    }
    public function create(){
        $generos = Genre::all();
        return view('movies.create')->with('generos',$generos);
    }
    public function save(Request $request){
        $reglas = [
            'title'=> 'required',
            'rating'=>'required|numeric',
            'awards'=>'required|numeric',
            'length'=>'required|numeric',
            'release_date'=>'date'
        ];

        $mensajes = [
            'title.required'=>'Este campo titulo es requerido',
            'numeric'=>'Este campo :attribute sólo acepta número',
            'date'=>'Fecha invalida'
        ];

        $this->validate($request,$reglas,$mensajes);
        $pelicula = new Movie($request->all());
        $pelicula->save();
        return redirect('/adminMovies');
        
    }
    public function delete($id){
        $peliculaBorrar = Movie::find($id);
        $peliculaBorrar->delete();
        return redirect('/adminMovies');
    }
}
