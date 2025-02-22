<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoPago extends Model
{
    use HasFactory;

    protected $table = 'pedidos_pagos';
    protected $fillable = [
        'monto',
        'estado',
        'fechaPago',
        'fechaEnvio',
        'direccionEnvio',
        'telfCliente',
        'carrito_id',
        'tarjeta_id'
    ];

    public function carrito() {
        return $this->belongsTo(Carrito::class,'carrito_id');
    }

    public function tarjeta() {
        return $this->belongsTo(Tarjeta::class,'tarjeta_id');
    }

    public function factura() {
        return $this->hasOne(Factura::class,'pago_id');
    }

    public function comision() {
        return $this->hasOne(Comision::class,'pago_id');
    }
}
