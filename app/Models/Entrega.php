<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entrega extends Model
{
    use HasFactory;

    protected $table = 'entregas';

    protected $primaryKey = 'id_entrega';

    public $timestamps = false;

    protected $fillable = [
        'id_venta',
        'estado',
        'id_repartidor',
    ];

    /**
     *
     */
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_venta');
    }

    /**
     *
     */
    public function repartidor()
    {
        return $this->belongsTo(Repartidor::class, 'id_repartidor');
    }
}
