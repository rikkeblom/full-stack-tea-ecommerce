<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'fornavn',
        'efternavn',
        'land',
        'adresse_1',
        'adresse_2',
        'by',
        'postnummer',
        'firma'
    ];

    // Relationships
    public function ordreFakturering()
    {
        return $this->hasMany(\App\Models\Ordre::class, 'faktureringsadresse_id');
    }

    public function ordreLevering()
    {
        return $this->hasMany(\App\Models\Ordre::class, 'leveringsadresse_id');
    }

    protected $table = 'adresser';
}
