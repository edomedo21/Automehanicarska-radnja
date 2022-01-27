<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korisnici extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'id_korisnik',
        'ime',
        'email',
        'id_auto',
        'username',
        'password',
    ];
}
