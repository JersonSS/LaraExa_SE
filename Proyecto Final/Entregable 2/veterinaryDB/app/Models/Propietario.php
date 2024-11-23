<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    protected $table="propietarios";
    protected $primaryKey="propietario_id";
    public $timestamps=false;
    protected $guarded=[];
}
