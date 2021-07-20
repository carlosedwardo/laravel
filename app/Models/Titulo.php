<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 01)* Necessario para uso da exclusao logica
use Illuminate\Database\Eloquent\SoftDeletes;

class Titulo extends Model
{
    use HasFactory;

    // 01)* Uso para exclusao do registro, em modo logico. 
    // 01)* Ira registrar no campo a data de exclusao do registro
    use SoftDeletes;

    // https://laravel.com/docs/8.x/eloquent#inserts
    // The attributes that are mass assignable.

    protected $fillable = ['titulo'];  // nome do campo na tabela titulo
   //  protected $guarded = [''];

}
