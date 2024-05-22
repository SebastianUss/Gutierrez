<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    protected $table = "producto";
    
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'categoria_id', // Agregamos la nueva columna de categoría
    ];

    // Definimos la relación con la tabla de categorías
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id'); // Corregimos la clave externa aquí
    }
}
