<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost_per_teus extends Model
{
    use HasFactory;

    protected $table = 's_cost_per_teus';
    protected $fillable = [
        'jenis_data', 'tahun', 'bulan', 'totalbiaya', 'totalteus', 'biayaperteus'
    ];     
}
