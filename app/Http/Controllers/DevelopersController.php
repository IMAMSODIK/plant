<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopersController extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => "Developers"
        ];
        return view('developers.index', $data);
    }
}
