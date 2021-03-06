@extends('layouts.main')

@section('content')
  <section class="principal">
       <article class="nuevas" id="peliculas">
           <div class="peliculas">

             <form  action="/saveMovie" method="POST">
              @csrf
               <h2 class="__peliculasdeldia">Nueva Película</h2>
               <br>
              
               <br>
               <div class="form-row">
                <div  class="form-group col-4 offset-4 ">
                  
                    
                    @if(count($errors)>0)
                    <ul class="alert alert-danger">
                        
                        @foreach ($errors->all() as $error)
                         <li>{{$error}}</li>    
                        @endforeach
                    </ul> 
                    @endif   
                                 
                    

                    <label for="titulo">Título</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{old('title')}}"/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="rating">Rating</label>
                    <input class="form-control" type="text" name="rating" id="rating" value=""/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="premios">Premios</label>
                    <input class="form-control" type="text" name="awards" id="awards" value=""/>
                </div>
                <div  class="form-group col-4 offset-4">
                    <label for="length">Duración</label>
                    <input class="form-control" type="text" name="length" id="length" value=""/>
                </div>

                <div  class="form-group col-4 offset-4">
                    <label for="duracion">Estreno</label>
                    <input class="form-control" type="date" name="release_date" id="release_date" value=""/>
                </div>
                
                <div  class="form-group col-4 offset-4">
                    <label for="genre">Genero</label>
                    <select class="form-control" name="genre_id">
                      @foreach ($generos as $genero)
                        <option value="{{$genero->id}}">{{$genero->name}} </option>    
                      @endforeach  
                      
                    </select>
                </div>
                <div class="form-group col-4 offset-4">
                    <input type="submit" class="btn btn-primary" value="Agregar Película">
                </div>
            </div>
            </form>

          </div>
      </article>
  </section>

@endsection
