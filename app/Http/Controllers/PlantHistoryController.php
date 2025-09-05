<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantHistoryController extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => "Plants Histories"
        ];
        return view('histori.index', $data);
    }
}
