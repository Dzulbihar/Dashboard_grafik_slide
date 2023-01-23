<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target_rkap_perbulan extends Model
{
    use HasFactory;
    protected $table = 's_target_rkap_perbulan';
    protected $fillable = [
        'jenis_data', 'tahun', 'bulan', 'target_rkap', 'satuan', 'type',
    ];
}
