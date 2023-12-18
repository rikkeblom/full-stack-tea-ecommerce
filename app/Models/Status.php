<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'navn',
    ];

    // Relationships
    public function ordreBetalingsStatus()
    {
        return $this->hasMany(\App\Models\Ordre::class, 'betalingsstatus_id');
    }

    public function ordreLeveringsStatus()
    {
        return $this->hasMany(\App\Models\Ordre::class, 'leveringsstatus_id');
    }

    protected $table = 'status';
}
