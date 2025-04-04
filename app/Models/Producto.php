<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_producto';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'imagen',
        'fecha_agregado',
    ];

    public function setImagenAttribute($value)
    {
        if (is_file($value)) {
            $this->attributes['imagen'] = $value->store('productos', 'public');
        }
    }
}
