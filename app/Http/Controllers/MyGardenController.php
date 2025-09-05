<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyGardenController extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => "My Garden"
        ];
        return view('garden.index', $data);
    }
}
