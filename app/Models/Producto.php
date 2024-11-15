<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';

    public $fillable = [
        'marca_id',
        'codigo_producto',
        'descripcion_producto',
        'unidades_por_caja',
        'precio',
        'iva',
        'precio_con_iva',
        'descuento_por_bultos',
        'descuento_por_volumen',
        'imagen',
        'slug'
    ];

    protected $casts = [
        'unidades_por_caja' => 'integer',
        'precio' => 'decimal:2',
        'iva' => 'decimal:2',
        'precio_con_iva' => 'decimal:2'
    ];
}
