<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_cliente';

    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'direccion',
        'telefono',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
