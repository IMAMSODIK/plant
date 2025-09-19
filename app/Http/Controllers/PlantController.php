<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlantController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:plants,nama',
            'moisture_min' => 'required|numeric|min:1|max:100',
            'id' => 'required|exists:gardens,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

        try {
            $path = storage_path('app/smart-pot-soil.json');

            $json = file_get_contents($path);
            $data = json_decode($json, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                return response()->json([
                    'status' => false,
                    'message' => 'JSON Error: ' . json_last_error_msg()
                ], 500);
            }

            $data['plant_information']['moisture_min'] = $request->moisture_min;
            file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));

            $firebaseUrl = "https://smart-pot-soil-default-rtdb.asia-southeast1.firebasedatabase.app/plant_information.json";

            $payload = json_encode([
                "moisture_min" => (int)$request->moisture_min
            ]);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $firebaseUrl);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $firebaseResponse = curl_exec($ch);
            curl_close($ch);

            $plant = Plant::create([
                'garden_id' => $request->id,
                'nama' => $request->name,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Tanaman berhasil disimpan',
                'data' => $plant->load('garden'),
                'firebase' => json_decode($firebaseResponse, true)
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }


    public function detail(Request $request)
    {
        try {
            // Ambil data tanaman dari database
            $plant = Plant::with('garden')->where('id', $request->id)->first();

            // Ambil data JSON dari Firebase
            $firebaseUrl = "https://smart-pot-soil-default-rtdb.asia-southeast1.firebasedatabase.app/.json";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $firebaseUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $firebaseResponse = curl_exec($ch);
            curl_close($ch);

            if (!$firebaseResponse) {
                throw new \Exception("Gagal mengambil data dari Firebase");
            }

            $plantData = json_decode($firebaseResponse, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception("JSON Error: " . json_last_error_msg());
            }

            $data = [
                'plant' => $plant,
                'pageTitle' => 'Detail',
                'dataPlant' => $plantData,
            ];

            return view('plant.detail', $data);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }


    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:plants,id',
        ]);

        try {
            $plant = Plant::findOrFail($request->id);
            $plant->delete();

            return response()->json([
                'status' => true,
                'message' => 'Tanaman berhasil dihapus'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function activatePump(Request $request)
    {

        $path = storage_path('app/smart-pot-soil.json');


        $json = file_get_contents($path);
        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json([
                'status' => 'error',
                'message' => 'JSON Error: ' . json_last_error_msg()
            ], 500);
        }

        $data['actuator']['pump_active'] = 1;

        file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));

        $firebaseUrl = "https://smart-pot-soil-default-rtdb.asia-southeast1.firebasedatabase.app/actuator/pump_active.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $firebaseUrl);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $firebaseResponse = curl_exec($ch);
        curl_close($ch);

        return response()->json([
            'status' => 'success',
            'local_data' => $data,
            'firebase_response' => json_decode($firebaseResponse, true)
        ]);
    }
}
