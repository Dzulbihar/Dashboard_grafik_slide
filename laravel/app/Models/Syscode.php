<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syscode extends Model
{
    use HasFactory;

    protected $table = 's_syscode';
    protected $fillable = [
        'kode', 'value_char', 'value_number', 'ket_char', 'ket_number',
    ];
}
