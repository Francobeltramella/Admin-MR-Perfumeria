<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre',
        'identificador',
        'categoria',
        'marca',
        'descripcion',
        'foto',
        'precio',
        'precio_promocional',
        'variante',
        'peso',
        'alto',
        'ancho',
        'profundidad',
        'stock',
        'codigo_barra',
        'envio',
        'sexo',
        'rango_edad',
        
    ];

    public function rubros(){
        return $this->belongsTo(Rubro::class, 'id');
    }

    public function subrubros(){
        return $this->belongsTo(Subrubro::class);
    }
}


