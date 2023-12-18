<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordre extends Model
{
    use HasFactory;

    // Relationships
    public function kurv()
    {
        return $this->belongsTo(\App\Models\Kurv::class, 'kurv_id');
    }

    public function faktureringsadresse()
    {
        return $this->belongsTo(\App\Models\Adresse::class, 'faktureringsadresse_id');
    }

    public function leveringsadresse()
    {
        return $this->belongsTo(\App\Models\Adresse::class, 'leveringsadresse_id');
    }    

    public function betalingsstatus()
    {
        return $this->belongsTo(\App\Models\Status::class, 'betalingsstatus_id');
    }

    public function betalingsmetode()
    {
        return $this->belongsTo(\App\Models\Betalingsmetode::class, 'betalingsmetode_id');
    }

    public function leveringsstatus()
    {
        return $this->belongsTo(\App\Models\Status::class, 'leveringsstatus_id');
    }

    protected $table = 'ordrer';
}

// $ordre->adresse()->saveMany([
//     new App\Models\Variant(['titel'=>'test fra terminal']),
//     new App\Models\Variant(['titel'=>'test fra terminal 2']),
// ])