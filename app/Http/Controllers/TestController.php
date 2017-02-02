<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Charts;
use App\User;

class TestController extends Controller
{
    public function index()
    {
        $chart = Charts::database(User::all(), 'bar', 'highcharts')
            ->title('Estadisticas Prueba')
            ->dimensions(1080,500)
            ->responsive(false)
             ->elementLabel("Total usuarios")
            ->groupBy('name');
            
        return view('welcome', ['chart' => $chart]);
    }
}


