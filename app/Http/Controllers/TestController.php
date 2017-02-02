<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Charts;

class TestController extends Controller
{
    public function index()
    {
        $chart = Charts::create('line', 'highcharts')
            ->title('Estadisticas Prueba')
            ->labels(['Diciembre 2016', 'Enero 2017', 'Febrero 2017'])
            ->values([50,115,200,18])
            ->dimensions(1080,500)
            ->responsive(false);
        return view('welcome', ['chart' => $chart]);
    }
}