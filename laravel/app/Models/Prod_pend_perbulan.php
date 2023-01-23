<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod_pend_perbulan extends Model
{
    use HasFactory;

    protected $table = 's_prod_pend_perbulan';
    protected $fillable = [
        'jenis_data', 'lokasi', 'tahun', 'bulan', 'shipcall', 'gt', 'jml_box', 'jml_teus', 'total_pendapatan','tahun_departure', 'bulan_departure',
    ];    
}
