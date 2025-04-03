<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pedido';
    public $timestamps = false;

    protected $fillable = [
        'id_cliente',
        'fecha_pedido',
        'total',
        'estado',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');
    }
}