<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class learning extends Controller
{
    public function index($name) {
        echo "Hello <b> $name </b> from controller<br>";
        echo "This page is displayed from controller";
        return view('learn', ['equipment'=>['Computer','Mouse','Keyboard','wifi doungle','USB Storage device']]);
    }
}
