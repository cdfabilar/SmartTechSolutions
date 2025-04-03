<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Laravel por defecto usa 'id', así que lo cambiamos:
    protected $primaryKey = 'id_cliente';

    // Si no usas timestamps automáticos (created_at, updated_at):
    public $timestamps = false;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'direccion',
        'fecha_registro',
    ];

    // Relaciones (si quisieras usarlas más adelante)
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_cliente', 'id_cliente');
    }
}
