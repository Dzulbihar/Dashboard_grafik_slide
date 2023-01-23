<?php

namespace App\Exports;

use App\Models\Target_rkap_perbulan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Target_rkap_perbulanExport implements FromCollection, WithCustomCsvSettings, WithHeadings
{
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }

    public function headings(): array
    {
        return [
            "Jenis Data",  
            "Tahun",
            "Bulan",                
            "Target RKAP",
            "Satuan",           
            "Type",
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Target_rkap_perbulan::select(
            'jenis_data',                   
            'tahun',
            'bulan',                 
            'target_rkap',                    
            'satuan',
            'type', 
        )->get();
    }
}