<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function alert ()
    {
        $title = "alert";
        return view('alert.alert',
            [
            'title' => $title,
        ]);
    }  

}
