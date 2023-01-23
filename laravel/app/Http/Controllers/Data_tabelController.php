<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prod_pend_perbulan;
use App\Models\Prod_pend_percustomer;
use App\Models\Cost_per_teus;
use DB;

class Data_tabelController extends Controller
{

    public function data_arus ()
    {
        $title = "data_arus";
        $data_arus = \App\Models\Prod_pend_perbulan::orderBy('id', 'ASC')
        ->get();
        $lokasi_data_arus =  DB::select('SELECT distinct Lokasi From DASHBOARDGRAFIK.s_prod_pend_perbulan');
        $tahun_data_arus =  DB::select('SELECT distinct Tahun From DASHBOARDGRAFIK.s_prod_pend_perbulan order by tahun DESC');

        return view('data_tabel.data_arus',
            [
            'title' => $title,
            'data_arus' => $data_arus,
            'lokasi_data_arus' => $lokasi_data_arus,
            'tahun_data_arus' => $tahun_data_arus,
        ]);
    }

        public function cari_lokasi_data_arus(Request $request)
        {
            $title = "data_arus";
            $lokasi_data_arus =  DB::select('SELECT distinct Lokasi From DASHBOARDGRAFIK.s_prod_pend_perbulan');
            $tahun_data_arus =  DB::select('SELECT distinct Tahun From DASHBOARDGRAFIK.s_prod_pend_perbulan order by tahun DESC');
            
            // menangkap data pencarian
            $cari_lokasi = $request->cari_lokasi;
            $cari_tahun = $request->cari_tahun;
            $data_arus =  DB::select("select * from DASHBOARDGRAFIK.s_prod_pend_perbulan where LOKASI LIKE'%$cari_lokasi%' and TAHUN LIKE'%$cari_tahun%'");

            return view('data_tabel.data_arus',
                [
                'title' => $title,
                'data_arus' => $data_arus,
                'lokasi_data_arus' => $lokasi_data_arus,
                'tahun_data_arus' => $tahun_data_arus,
            ]);
        }

    public function data_arus_percustomer ()
    {
        $title = "data_arus_percustomer";
        $data_arus_percustomer = \App\Models\Prod_pend_percustomer::orderBy('id', 'ASC')
        ->get();
        $lokasi_data_arus_percustomer =  DB::select('SELECT distinct Lokasi From DASHBOARDGRAFIK.s_prod_pend_percustomer');
        $tahun_data_arus_percustomer =  DB::select('SELECT distinct Tahun From DASHBOARDGRAFIK.s_prod_pend_percustomer order by tahun DESC');

        return view('data_tabel.data_arus_percustomer',
            [
            'title' => $title,
            'data_arus_percustomer' => $data_arus_percustomer,
            'lokasi_data_arus_percustomer' => $lokasi_data_arus_percustomer,
            'tahun_data_arus_percustomer' => $tahun_data_arus_percustomer,
        ]);
    }

        public function cari_lokasi_data_arus_percustomer(Request $request)
        {
            $title = "data_arus_percustomer";
            $lokasi_data_arus_percustomer =  DB::select('SELECT distinct Lokasi From DASHBOARDGRAFIK.s_prod_pend_percustomer');
            $tahun_data_arus_percustomer =  DB::select('SELECT distinct Tahun From DASHBOARDGRAFIK.s_prod_pend_percustomer order by tahun DESC');
            
            // menangkap data pencarian
            $cari_lokasi = $request->cari_lokasi;
            $cari_tahun = $request->cari_tahun;
            $data_arus_percustomer =  DB::select("select * from DASHBOARDGRAFIK.s_prod_pend_percustomer where LOKASI LIKE'%$cari_lokasi%' and TAHUN LIKE'%$cari_tahun%'");

            return view('data_tabel.data_arus_percustomer',
                [
                'title' => $title,
                'data_arus_percustomer' => $data_arus_percustomer,
                'lokasi_data_arus_percustomer' => $lokasi_data_arus_percustomer,
                'tahun_data_arus_percustomer' => $tahun_data_arus_percustomer,
            ]);
        }

    public function data_cost_perteus ()
    {
        $title = "data_cost_perteus";
        $data_cost_perteus = \App\Models\Cost_per_teus::all();
        $tahun_data_cost_perteus =  DB::select('SELECT distinct Tahun From DASHBOARDGRAFIK.s_cost_per_teus order by tahun DESC');

        return view('data_tabel.data_cost_perteus',
            [
            'title' => $title,
            'data_cost_perteus' => $data_cost_perteus,
            'tahun_data_cost_perteus' => $tahun_data_cost_perteus,
        ]);
    }

        public function cari_tahun_data_cost_perteus(Request $request)
        {
            $title = "data_cost_perteus";
            $tahun_data_cost_perteus =  DB::select('SELECT distinct Tahun From DASHBOARDGRAFIK.s_cost_per_teus order by tahun DESC');
            
            // menangkap data pencarian
            $cari_tahun = $request->cari_tahun;
            $data_cost_perteus =  DB::select("select * from DASHBOARDGRAFIK.s_cost_per_teus where TAHUN LIKE'%$cari_tahun%'");

            return view('data_tabel.data_cost_perteus',
                [
                'title' => $title,
                'data_cost_perteus' => $data_cost_perteus,
                'tahun_data_cost_perteus' => $tahun_data_cost_perteus,
            ]);
        }

}
