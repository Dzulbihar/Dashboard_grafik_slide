<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/home/cari_home', [App\Http\Controllers\HomeController::class, 'cari_home']);

Route::group(['middleware' => ['auth','checkRole:admin']],function(){

    Route::get('/vessel_detail', [App\Http\Controllers\KinerjaController::class, 'vessel_detail']);
    Route::get('/vessel_detail/cari', [App\Http\Controllers\KinerjaController::class, 'cari_vessel_detail']);
    Route::get('/vessel_performance', [App\Http\Controllers\KinerjaController::class, 'vessel_performance']);
    Route::get('/vessel_performance/cari', [App\Http\Controllers\KinerjaController::class, 'cari_vessel_performance']);

    Route::get('/grafik_vessel_performance', [App\Http\Controllers\KinerjaController::class, 'grafik_vessel_performance']);
    Route::get('/grafik_vessel_performance/cari', [App\Http\Controllers\KinerjaController::class, 'cari_grafik_vessel_performance']);

    Route::get('/tanggal_vessel_performance', [App\Http\Controllers\KinerjaController::class, 'tanggal_vessel_performance']);
    Route::get('/tanggal_vessel_performance/cari', [App\Http\Controllers\KinerjaController::class, 'cari_tanggal_vessel_performance']);

    Route::get('/bulan_vessel_performance', [App\Http\Controllers\KinerjaController::class, 'bulan_vessel_performance']);
    Route::get('/bulan_vessel_performance/cari', [App\Http\Controllers\KinerjaController::class, 'cari_bulan_vessel_performance']);


    Route::get('/syscode', [App\Http\Controllers\MasterController::class, 'syscode']);
        Route::post('/syscode/tambah_tahun', [App\Http\Controllers\MasterController::class, 'tambah_tahun']);
        Route::get('/syscode/{id}/edit_tahun', [App\Http\Controllers\MasterController::class, 'edit_tahun']);
        Route::post('/syscode/{id}/update_tahun', [App\Http\Controllers\MasterController::class, 'update_tahun']);
        Route::get('/syscode/{id}/hapus_tahun', [App\Http\Controllers\MasterController::class, 'hapus_tahun']);
        Route::post('/syscode/tambah_waktu', [App\Http\Controllers\MasterController::class, 'tambah_waktu']);
        Route::get('/syscode/{id}/edit_waktu', [App\Http\Controllers\MasterController::class, 'edit_waktu']);
        Route::post('/syscode/{id}/update_waktu', [App\Http\Controllers\MasterController::class, 'update_waktu']);
        Route::get('/syscode/{id}/hapus_waktu', [App\Http\Controllers\MasterController::class, 'hapus_waktu']);
        Route::post('/syscode/tambah_type', [App\Http\Controllers\MasterController::class, 'tambah_type']);
        Route::get('/syscode/{id}/edit_type', [App\Http\Controllers\MasterController::class, 'edit_type']);
        Route::post('/syscode/{id}/update_type', [App\Http\Controllers\MasterController::class, 'update_type']);
        Route::get('/syscode/{id}/hapus_type', [App\Http\Controllers\MasterController::class, 'hapus_type']);
        Route::post('/syscode/tambah_satuan', [App\Http\Controllers\MasterController::class, 'tambah_satuan']);
        Route::get('/syscode/{id}/edit_satuan', [App\Http\Controllers\MasterController::class, 'edit_satuan']);
        Route::post('/syscode/{id}/update_satuan', [App\Http\Controllers\MasterController::class, 'update_satuan']);
        Route::get('/syscode/{id}/hapus_satuan', [App\Http\Controllers\MasterController::class, 'hapus_satuan']);

    Route::get('/user', [App\Http\Controllers\MasterController::class, 'user']);
        Route::post('/user/tambah_user', [App\Http\Controllers\MasterController::class, 'tambah_user']);
        Route::get('/user/{id}/edit_user', [App\Http\Controllers\MasterController::class, 'edit_user']);
        Route::post('/user/{id}/update_user', [App\Http\Controllers\MasterController::class, 'update_user']);
        Route::get('/user/{id}/hapus_user', [App\Http\Controllers\MasterController::class, 'hapus_user']);

    Route::get('/target_rkap', [App\Http\Controllers\MasterController::class, 'target_rkap']);
        Route::get('/target_rkap/cari_tahun', [App\Http\Controllers\MasterController::class, 'cari_tahun']);
        Route::post('/target_rkap/tambah_target_rkap', [App\Http\Controllers\MasterController::class, 'tambah_target_rkap']);
        Route::get('/target_rkap/{id}/edit_target_rkap', [App\Http\Controllers\MasterController::class, 'edit_target_rkap']);
        Route::post('/target_rkap/{id}/update_target_rkap', [App\Http\Controllers\MasterController::class, 'update_target_rkap']);
        Route::get('/target_rkap/{id}/hapus_target_rkap', [App\Http\Controllers\MasterController::class, 'hapus_target_rkap']);
        Route::get('/target_rkap/export_excel', [App\Http\Controllers\MasterController::class, 'export_excel']);

    Route::get('/data_arus', [App\Http\Controllers\Data_tabelController::class, 'data_arus']);
        Route::get('/data_arus/cari_lokasi_data_arus', [App\Http\Controllers\Data_tabelController::class, 'cari_lokasi_data_arus']);
        Route::get('/data_arus_percustomer', [App\Http\Controllers\Data_tabelController::class, 'data_arus_percustomer']);
        Route::get('/data_arus_percustomer/cari_lokasi_data_arus_percustomer', [App\Http\Controllers\Data_tabelController::class, 'cari_lokasi_data_arus_percustomer']);
        Route::get('/data_cost_perteus', [App\Http\Controllers\Data_tabelController::class, 'data_cost_perteus']);
        Route::get('/data_cost_perteus/cari_tahun_data_cost_perteus', [App\Http\Controllers\Data_tabelController::class, 'cari_tahun_data_cost_perteus']);

    Route::get('/shipcall_gt', [App\Http\Controllers\Slide_grafikController::class, 'shipcall_gt']);
        Route::get('/shipcall_gt/cari_tahun_shipcall_gt', [App\Http\Controllers\Slide_grafikController::class, 'cari_tahun_shipcall_gt']);

    Route::get('/arus_domestik', [App\Http\Controllers\Slide_grafikController::class, 'arus_domestik']);
        Route::get('/arus_domestik/cari_tahun_arus_domestik', [App\Http\Controllers\Slide_grafikController::class, 'cari_tahun_arus_domestik']);
        Route::get('/arus_international', [App\Http\Controllers\Slide_grafikController::class, 'arus_international']);
        Route::get('/arus_international/cari_tahun_arus_international', [App\Http\Controllers\Slide_grafikController::class, 'cari_tahun_arus_international']);
        Route::get('/arus_total', [App\Http\Controllers\Slide_grafikController::class, 'arus_total']);
        Route::get('/arus_total/cari_tahun_arus_total', [App\Http\Controllers\Slide_grafikController::class, 'cari_tahun_arus_total']);
        
    Route::get('/market_domestik', [App\Http\Controllers\Slide_grafikController::class, 'market_domestik']);
        Route::get('/market_domestik/cari_tahun_market_domestik', [App\Http\Controllers\Slide_grafikController::class, 'cari_tahun_market_domestik']);
        Route::get('/market_international', [App\Http\Controllers\Slide_grafikController::class, 'market_international']);
        Route::get('/market_international/cari_tahun_market_international', [App\Http\Controllers\Slide_grafikController::class, 'cari_tahun_market_international']);
        Route::get('/market_total', [App\Http\Controllers\Slide_grafikController::class, 'market_total']);
        Route::get('/market_total/cari_tahun_market_total', [App\Http\Controllers\Slide_grafikController::class, 'cari_tahun_market_total']);

    Route::get('/nota_satuan', [App\Http\Controllers\Slide_grafikController::class, 'nota_satuan']);
        Route::get('/nota_satuan/cari_nota_satuan', [App\Http\Controllers\Slide_grafikController::class, 'cari_nota_satuan']);

    Route::get('/departure_domestik', [App\Http\Controllers\Slide_grafikController::class, 'departure_domestik']);
        Route::get('/departure_domestik/cari_departure_domestik', [App\Http\Controllers\Slide_grafikController::class, 'cari_departure_domestik']);
        Route::get('/departure_international', [App\Http\Controllers\Slide_grafikController::class, 'departure_international']);
        Route::get('/departure_international/cari_departure_international', [App\Http\Controllers\Slide_grafikController::class, 'cari_departure_international']);
        Route::get('/departure_total', [App\Http\Controllers\Slide_grafikController::class, 'departure_total']);
        Route::get('/departure_total/cari_departure_total', [App\Http\Controllers\Slide_grafikController::class, 'cari_departure_total']);

    Route::get('/arus_grafik', [App\Http\Controllers\Slide_grafikController::class, 'arus_grafik']);
    Route::get('/cari_arus_grafik', [App\Http\Controllers\Slide_grafikController::class, 'cari_arus_grafik']);
    Route::get('/market_share', [App\Http\Controllers\Slide_grafikController::class, 'market_share']);
    Route::get('/cari_market_share', [App\Http\Controllers\Slide_grafikController::class, 'cari_market_share']);

    Route::get('/nota', [App\Http\Controllers\Slide_grafikController::class, 'nota']);
    Route::get('/nota/cari_nota', [App\Http\Controllers\Slide_grafikController::class, 'cari_nota']);
    Route::get('/departure', [App\Http\Controllers\Slide_grafikController::class, 'departure']);
    Route::get('/departure/cari_departure', [App\Http\Controllers\Slide_grafikController::class, 'cari_departure']);

    Route::get('/produksi_pendapatan', [App\Http\Controllers\Slide_grafikController::class, 'produksi_pendapatan']);
    Route::get('/kinerja_kapal', [App\Http\Controllers\Slide_grafikController::class, 'kinerja_kapal']);

    Route::get('/kinerja_lapangan', [App\Http\Controllers\KinerjaController::class, 'kinerja_lapangan']);
        Route::get('/kinerja_gudang', [App\Http\Controllers\KinerjaController::class, 'kinerja_gudang']);
        Route::get('/kinerja_dermaga', [App\Http\Controllers\KinerjaController::class, 'kinerja_dermaga']);

    Route::get('/kpi', [App\Http\Controllers\KpiController::class, 'kpi']);
        Route::get('/kpi/cari_kpi', [App\Http\Controllers\KpiController::class, 'cari_kpi']);

    Route::get('/behandle', [App\Http\Controllers\Real_monitoringController::class, 'behandle']);
        Route::get('/ex_behandle', [App\Http\Controllers\Real_monitoringController::class, 'ex_behandle']);
        Route::get('/karantina', [App\Http\Controllers\Real_monitoringController::class, 'karantina']);
        Route::get('/ex_karantina', [App\Http\Controllers\Real_monitoringController::class, 'ex_karantina']);
        Route::get('/rubah_status', [App\Http\Controllers\Real_monitoringController::class, 'rubah_status']);
        Route::get('/shift', [App\Http\Controllers\Real_monitoringController::class, 'shift']);
        Route::get('/activity_per_cy', [App\Http\Controllers\Real_monitoringController::class, 'activity_per_cy']);
        Route::get('/activity_per_block', [App\Http\Controllers\Real_monitoringController::class, 'activity_per_block']);
        Route::get('/perjam', [App\Http\Controllers\Real_monitoringController::class, 'perjam']);
        Route::get('/estimasi', [App\Http\Controllers\Real_monitoringController::class, 'estimasi']);

    Route::get('/alert', [App\Http\Controllers\AlertController::class, 'alert']);

});