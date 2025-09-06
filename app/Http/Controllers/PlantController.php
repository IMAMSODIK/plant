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
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

        try {
            $plant = Plant::create([
                'garden_id' => $request->id,
                'nama' => $request->name,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Tanaman berhasil disimpan',
                'data' => $plant->load('garden')
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
        $plant = Plant::with('garden')->where('id', $request->id)->first();

        $data = [
            'plant' => $plant,
            'pageTitle' => 'Detail',
        ];

        return view('plant.detail', $data);
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
}
