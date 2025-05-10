<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Repartidor extends Model
{
    //
    protected $table = 'repartidores';

    protected $primaryKey = 'id_repartidor';
    public $timestamps = false;

    protected $dates = ['fecha_ingreso'];

    protected $fillable = [
        'id_usuario',
        'telefono',
        'direccion',
        'fecha_ingreso',
        'entregas_totales',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
