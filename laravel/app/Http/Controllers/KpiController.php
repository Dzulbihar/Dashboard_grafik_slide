<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kpi;
use DB;

class KpiController extends Controller
{

    public function kpi ()
    {
        $title = "kpi";
        $kpis = \App\Models\Kpi::all();
        $bulan_kpi =  DB::select('SELECT distinct Bulan From DASHBOARDGRAFIK.S_KPI order by bulan ASC');
        $tahun_kpi =  DB::select('SELECT distinct Tahun From DASHBOARDGRAFIK.S_KPI order by tahun DESC');

        return view('kpi.kpi',
            [
            'title' => $title,
            'kpis' => $kpis,
            'bulan_kpi' => $bulan_kpi,
            'tahun_kpi' => $tahun_kpi,
        ]);
    }

        public function cari_kpi(Request $request)
        {
            $title = "kpi";
            $bulan_kpi =  DB::select('SELECT distinct Bulan From DASHBOARDGRAFIK.S_KPI order by bulan ASC');
            $tahun_kpi =  DB::select('SELECT distinct Tahun From DASHBOARDGRAFIK.S_KPI order by tahun DESC');
            
            // menangkap data pencarian
            $cari_bulan = $request->cari_bulan;
            $cari_tahun = $request->cari_tahun;
            $kpis =  DB::select("select * from DASHBOARDGRAFIK.S_KPI where BULAN LIKE'%$cari_bulan%' and TAHUN LIKE'%$cari_tahun%'");

            return view('kpi.kpi',
                [
                'title' => $title,
                'kpis' => $kpis,
                'bulan_kpi' => $bulan_kpi,
                'tahun_kpi' => $tahun_kpi,
            ]);
        }

}
