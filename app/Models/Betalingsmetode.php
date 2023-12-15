<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Betalingsmetode extends Model
{
    use HasFactory;

    public function Betalingsmetode()
    {
        return $this->hasMany(\App\Models\Ordre::class, 'betalingsmetode_id');
    }

    protected $table = 'betalingsmoder';
}
