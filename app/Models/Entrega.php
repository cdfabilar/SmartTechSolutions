<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entrega extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_entrega';
    public $timestamps = false;

    protected $fillable = [
        'id_pedido',
        'fecha_entrega_estimada',
        'fecha_entrega_real',
        'estado',
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido', 'id_pedido');
    }
}
