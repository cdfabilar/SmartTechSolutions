<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pago extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pago';
    public $timestamps = false;

    protected $fillable = [
        'id_pedido',
        'metodo_pago',
        'monto',
        'fecha_pago',
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido', 'id_pedido');
    }
}
