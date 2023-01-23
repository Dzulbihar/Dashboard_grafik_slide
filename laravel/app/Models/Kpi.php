<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    use HasFactory;

    protected $table = 's_kpi';
    protected $fillable = [
        'uraian', 'satuan', 'tahun', 'bulan', 'target_kpi_tahun_ini', 'week_1', 'week_2', 'week_3', 'week_4', 'kpi_tahun_ini', 'kpi_tahun_lalu', 'capaian_yoy', 'capaian_target',
    ];     
}
