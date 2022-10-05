<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
//use test_db\employees;

class DBController extends Controller
{
    function db_manp(){
        //  echo 'Below data is selected from blog mysql database on phpmyadmin:  ';
        //  return DB::select("select * from users");
        $weather = Http::get('http://api.weatherstack.com/current?access_key=c9ece71eaf12927568dca65b098f78be&query=Peshawar');
        return view('weather', ['weather'=>$weather['request']]);
    }

}
