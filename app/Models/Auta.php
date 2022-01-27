<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auta extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'ime',
        'dat_proiz',
        'sifra',
        'id_dijelovi',
        'id_korisnik',
    ];
}
