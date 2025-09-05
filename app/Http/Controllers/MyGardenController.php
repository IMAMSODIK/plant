<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyGardenController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => "My Garden"
        ];
        return view('garden.index', $data);
    }

    public function detail(Request $request)
    {
        $name = $request->query('name', 'Unknown');
        $gambar = '';
        $pageTitle = 'Detail';

        switch($name){
            case 'rose':
                $gambar = 'mawar.png';
                break;
            case 'sunflower':
                $gambar = 'matahari.png';
                break;
            case 'melati':
                $gambar = 'melati.png';
                break;
            case 'anggrek':
                $gambar = 'anggrek.png';
                break;
            case 'lidah-mertua':
                $gambar = 'lidah.png';
                break;
            case 'keladi':
                $gambar = 'keladi.png';
                break;
        }

        $flowers = [];
        for ($i = 1; $i <= 10; $i++) {
            $flowers[] = [
                'name'  => ucfirst($name) . ' ' . $i,
                'image' => $gambar,
            ];
        }

        return view('garden.detail', compact('flowers', 'name', 'pageTitle'));
    }
}
