<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        if (Auth::attempt(['email' => $r->email, 'password' => $r->password])) {
            $r->session()->regenerate();

            return response()->json([
                'success' => true,
                'redirect' => url('/dashboard')
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password'
            ], 401);
        }
    }

    public function registrasi()
    {
        $data = [
            'pageTitle' => 'Sign Up',
        ];

        return view('auth.registrasi', $data);
    }

    public function registrasiCheck(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => 'required|string|min:3|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return response()->json([
            'status'  => 'success',
            'message' => 'Registration successful',
            'redirect' => url('/dashboard')
        ]);
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
