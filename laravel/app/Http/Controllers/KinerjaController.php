<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vessel_details;
use App\Models\Vessel_performance;
use DB;

class KinerjaController extends Controller
{

    public function vessel_detail ()
    {
        $title = "vessel_detail";
        $pilih_tahun =  DB::select("SELECT distinct to_char(ACT_START_WORK_TS,'yyyy') AS ACT_START_WORK_TS FROM DASHBOARDGRAFIK.S_VESSEL_DETAILS");
        $vessel_detail = \App\Models\Vessel_details::all();

        return view('kinerja.vessel.vessel_detail',
            [
            'title' => $title,
            'pilih_tahun' => $pilih_tahun,
            'vessel_detail' => $vessel_detail,
        ]);
    } 

    public function cari_vessel_detail (Request $request)
    {
        $title = "vessel_detail";
        $pilih_tahun =  DB::select("SELECT distinct to_char(ACT_START_WORK_TS,'yyyy') AS ACT_START_WORK_TS FROM DASHBOARDGRAFIK.S_VESSEL_DETAILS");

        // menangkap data pencarian
            $bulan = $request->pilih_bulan;
            $tahun = $request->pilih_tahun;

        $vessel_detail =  DB::select("SELECT * FROM DASHBOARDGRAFIK.S_VESSEL_DETAILS WHERE to_char(ACT_START_WORK_TS,'mm/yyyy')='$bulan/$tahun'");


        return view('kinerja.vessel.vessel_detail',
            [
            'title' => $title,
            'pilih_tahun' => $pilih_tahun,
            'vessel_detail' => $vessel_detail,
        ]);
    } 

    public function vessel_performance ()
    {
        $title = "vessel_performance";
        $pilih_tahun =  DB::select("SELECT distinct to_char(FROM_TS,'yyyy') AS FROM_TS FROM DASHBOARDGRAFIK.S_VESSEL_PERFORMANCE");
        $vessel_performance = \App\Models\Vessel_performance::all();

        return view('kinerja.vessel.vessel_performance',
            [
            'title' => $title,
            'pilih_tahun' => $pilih_tahun,
            'vessel_performance' => $vessel_performance,
        ]);
    } 

    public function cari_vessel_performance (Request $request)
    {
        $title = "vessel_performance";
        $pilih_tahun =  DB::select("SELECT distinct to_char(FROM_TS,'yyyy') AS FROM_TS FROM DASHBOARDGRAFIK.S_VESSEL_PERFORMANCE");

        // menangkap data pencarian
            $bulan = $request->pilih_bulan;
            $tahun = $request->pilih_tahun;

        $vessel_performance =  DB::select("SELECT * FROM DASHBOARDGRAFIK.S_VESSEL_PERFORMANCE WHERE to_char(FROM_TS,'mm/yyyy')='$bulan/$tahun'");


        return view('kinerja.vessel.vessel_performance',
            [
            'title' => $title,
            'pilih_tahun' => $pilih_tahun,
            'vessel_performance' => $vessel_performance,
        ]);
    } 

    public function grafik_vessel_performance ()
    {
        $title = "grafik_vessel_performance";
        $vessel_detail = Vessel_details::select('ves_id','ves_name')->distinct()->get();

        return view('kinerja.vessel.grafik_vessel_performance',
            [
            'title' => $title,
            'vessel_detail' => $vessel_detail,
        ]);
    } 

    public function cari_grafik_vessel_performance ()
    {
        $title = "grafik_vessel_performance";
        $vessel_detail = Vessel_details::select('ves_id','ves_name')->distinct()->get();

        return view('kinerja.vessel.grafik_vessel_performance',
            [
            'title' => $title,
            'vessel_detail' => $vessel_detail,
        ]);
    } 

    public function tanggal_vessel_performance ()
    {
        $title = "tanggal_vessel_performance";

        return view('kinerja.vessel.tanggal_vessel_performance',
            [
            'title' => $title,
        ]);
    } 

    public function cari_tanggal_vessel_performance (Request $request)
    {
        $title = "tanggal_vessel_performance";

        // menangkap data pencarian
            $tanggal = $request->tanggal;

        return view('kinerja.vessel.tanggal_vessel_performance',
            [
            'title' => $title,
            'tanggal' => $tanggal,
        ]);
    } 

    public function bulan_vessel_performance ()
    {
        $title = "bulan_vessel_performance";
        $pilih_tahun =  DB::select("SELECT distinct TAHUN FROM DASHBOARDGRAFIK.S_VESSEL_PERFORMANCE");
        $tahun_max =  DB::select("SELECT MAX(TAHUN) AS tahun FROM DASHBOARDGRAFIK.S_VESSEL_PERFORMANCE");
        foreach ($tahun_max as $max) {
            $max->tahun;
        }
        $tahun = $max->tahun;
        $bulan_max =  DB::select("SELECT MAX(BULAN) AS bulan FROM DASHBOARDGRAFIK.S_VESSEL_PERFORMANCE");
        foreach ($bulan_max as $max) {
            $max->bulan;
        }
        $bulan = $max->bulan;

        return view('kinerja.vessel.bulan_vessel_performance',
            [
            'title' => $title,
            'pilih_tahun' => $pilih_tahun,
            'tahun' => $tahun,
            'bulan' => $bulan,
        ]);
    } 

    public function cari_bulan_vessel_performance (Request $request)
    {
        $title = "bulan_vessel_performance";
        $pilih_tahun =  DB::select("SELECT distinct TAHUN FROM DASHBOARDGRAFIK.S_VESSEL_PERFORMANCE");

        // menangkap data pencarian
            $bulan = $request->pilih_bulan;
            $tahun = $request->pilih_tahun;

        return view('kinerja.vessel.bulan_vessel_performance',
            [
            'title' => $title,
            'pilih_tahun' => $pilih_tahun,
            'bulan' => $bulan,
            'tahun' => $tahun,
        ]);
    } 

    public function kinerja_lapangan ()
    {
        $title = "kinerja_lapangan";
        return view('kinerja.kinerja_lapangan',
            [
            'title' => $title,
        ]);
    }  

    public function kinerja_gudang ()
    {
        $title = "kinerja_gudang";
        return view('kinerja.kinerja_gudang',
            [
            'title' => $title,
        ]);
    }  

    public function kinerja_dermaga ()
    {
        $title = "kinerja_dermaga";
        return view('kinerja.kinerja_dermaga',
            [
            'title' => $title,
        ]);
    }          
        
}
