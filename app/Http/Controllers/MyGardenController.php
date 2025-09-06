<?php

namespace App\Http\Controllers;

use App\Models\Garden;
use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MyGardenController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "My Garden",
            'gardens' => Garden::latest()->get()
        ];
        return view('garden.index', $data);
    }

    public function detail(Request $request)
    {
        $garden = Garden::where('id', $request->id)->first();

        $data = [
            'garden' => $garden,
            'pageTitle' => 'Detail',
            'gambar' => $garden->type_image,
            'name' => $garden->type_name,
            'flowers' => Plant::where('garden_id', $request->id)->get()
        ];

        return view('garden.detail', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type_name' => 'required|string|max:255|unique:gardens,type_name',
            'type_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

        try {
            $imagePath = null;
            if ($request->hasFile('type_image')) {
                $file = $request->file('type_image');
                $filename = Str::slug($request->type_name) . '_' . time() . '.' . $file->getClientOriginalExtension();
                $imagePath = $file->storeAs('flower_types', $filename, 'public');
            }

            $flowerType = Garden::create([
                'type_name' => $request->type_name,
                'type_image' => $imagePath,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Flower type berhasil disimpan',
                'data' => $flowerType
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:gardens,id',
        ]);

        try {
            $garden = Garden::findOrFail($request->id);
            foreach ($garden->plants as $plant) {
                $plant->delete();
            }

            if ($garden->type_image && Storage::disk('public')->exists($garden->type_image)) {
                Storage::disk('public')->delete($garden->type_image);
            }

            $garden->delete();

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
