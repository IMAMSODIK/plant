<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            'pageTitle' => 'Login',
        ];

        return view('auth.login', $data);
    }

    public function loginCheck(Request $r)
    {
        if (Auth::attempt(['username' => $r->username, 'password' => $r->password])) {
            $r->session()->regenerate();
            session()->put('tahun', $r->tahun);

            return response()->json([
                'success' => true,
                'redirect' => url('/dashboard')
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid username or password'
            ], 401);
        }
    }


    public function logout(Request $r)
    {
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();

        return response()->json([
            'status' => true,
        ]);
    }
}
