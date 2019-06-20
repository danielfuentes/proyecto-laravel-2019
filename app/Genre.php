<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Genre extends Model
{
    //Como se cumplio con los estandares, no es necesario colocarlo
    //protected $table = 'Genres';
    //protected $primaryKey = 'id';
    //Si en el caso de no tener los campos created_at y updated_at en la tabla entonces se debe colocar en false
    //protected $timeStamps = true;
    protected $guarded = [];
    public function movies(){
        return $this->hasMany(Movie::class);
    }

}
