<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoElectrodomestico extends Model
{
    use HasFactory;
    protected $table="tipo_electrodomestico";
    protected $primaryKey="codigo";
    protected $fillable=["codigo","descripcion","porcentajeISV"];
    public $timestamps=false;
    public $incrementing=false;

}
