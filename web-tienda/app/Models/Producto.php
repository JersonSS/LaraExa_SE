<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table="productos";
    protected $primaryKey="producto_id";
    public $timestamps=false;

    //guardar por asignacion masiva
    /*protected $fillable=[
        'nombre',
        'marca',
        'precio',
        'fvencimiento',
        'stock'
    ];*/

    //guardar por asignacion masiva - simple
    protected $guarded=[];
}
