<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dijelovi extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'id_dijelovi',
        'naziv',
        'id_auto',
        'sifra',
        'cijena'
    ];
}
