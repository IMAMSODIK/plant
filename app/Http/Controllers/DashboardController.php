<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // URL Firebase kamu
            $firebaseUrl = "https://smart-pot-soil-default-rtdb.asia-southeast1.firebasedatabase.app/device_information.json";

            // Ambil data dari Firebase
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $firebaseUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            // Decode JSON Firebase
            $dataDevice = json_decode($response, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                return response()->json([
                    'status' => false,
                    'message' => 'JSON Error: ' . json_last_error_msg()
                ]);
            }

            $pageTitle = "Dashboard";

            return view('dashboard.index', compact('dataDevice', 'pageTitle'));
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function ztest()
    {
        $json = file_get_contents(storage_path('app/smart-pot-soil.json'));

        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            dd('JSON Error: ' . json_last_error_msg(), $json);
        }

        return view('test', compact('data'));
    }
}
