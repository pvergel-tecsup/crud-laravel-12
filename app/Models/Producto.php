<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    
    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'nombre',
        'marca',
        'precio',
        'stock',
        'id_categoria'
    ];

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }
}
