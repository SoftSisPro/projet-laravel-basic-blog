<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    /**
     * Setear los dato de la tabla posts
     *
     * @var array
     */
    protected function title(): Attribute
    {
        return Attribute::make(

            set: function ($value){ //- Mutadores
                return strtolower($value);
            },
            get: function ($value){ //- Accesores
                return ucfirst($value);
            }
        );
    }

}
