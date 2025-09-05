<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "Dashboard"
        ];
        return view('dashboard.index', $data);
    }

    public function test()
    {
        $json = file_get_contents(storage_path('app/smart-pot-soil.json'));

        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            dd('JSON Error: ' . json_last_error_msg(), $json);
        }

        return view('test', compact('data'));
    }
}
