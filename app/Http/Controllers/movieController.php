<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class movieController extends Controller
{
    
    public function index(){
        $peliculas = Movie::paginate(5);
        return view('movie')->with('peliculas',$peliculas);
    }
    public function show($id){
        $detalle = Movie::find($id);
        return view('detallePelicula')->with('detalle',$detalle);
    }
}
