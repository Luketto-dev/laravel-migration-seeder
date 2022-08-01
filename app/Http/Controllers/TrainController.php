<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    function index()
    {
        $data = Train::all();
        // faccio il return della vista e del $data 
        return view('trains.index', [
            "trains" => $data
        ]);
    }
}
