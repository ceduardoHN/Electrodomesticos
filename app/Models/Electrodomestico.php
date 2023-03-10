<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electrodomestico extends Model
{
    use HasFactory;
    protected $table="electrodomestico";
    protected $primaryKey="codigo";
    protected $fillable=["codigo","descripcion","tipoElectrodomestico","precio","ISV","total"];
    public $timestamps=false;
    public $incrementing=false;
}
