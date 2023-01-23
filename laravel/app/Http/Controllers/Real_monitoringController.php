<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Real_monitoringController extends Controller
{
    public function behandle ()
    {
        $title = "behandle";
        return view('real_monitoring.behandle',
            [
            'title' => $title,
        ]);
    }

    public function ex_behandle ()
    {
        $title = "ex_behandle";
        return view('real_monitoring.ex_behandle',
            [
            'title' => $title,
        ]);
    }

    public function karantina ()
    {
        $title = "karantina";
        return view('real_monitoring.karantina',
            [
            'title' => $title,
        ]);
    }

    public function ex_karantina ()
    {
        $title = "ex_karantina";
        return view('real_monitoring.ex_karantina',
            [
            'title' => $title,
        ]);
    }

    public function rubah_status ()
    {
        $title = "rubah_status";
        return view('real_monitoring.rubah_status',
            [
            'title' => $title,
        ]);
    }                


    public function shift ()
    {
        $title = "shift";
        return view('real_monitoring.shift',
            [
            'title' => $title,
        ]);
    }  


    public function activity_per_cy ()
    {
        $title = "activity_per_cy";
        return view('real_monitoring.activity_per_cy',
            [
            'title' => $title,
        ]);
    }  

    public function activity_per_block ()
    {
        $title = "activity_per_block";
        return view('real_monitoring.activity_per_block',
            [
            'title' => $title,
        ]);
    }      


    public function perjam ()
    {
        $title = "perjam";
        return view('real_monitoring.perjam',
            [
            'title' => $title,
        ]);
    }   

    public function estimasi ()
    {
        $title = "estimasi";
        return view('real_monitoring.estimasi',
            [
            'title' => $title,
        ]);
    }       


}
