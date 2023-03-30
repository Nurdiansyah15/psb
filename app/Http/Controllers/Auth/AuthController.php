<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'no_regis' => 'required|string',
            'password' => 'required|string'
        ]);
        $pendaftar = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register');
        foreach ($pendaftar['data'] as $row => $r) {

            if ($r['no_regis'] == $request->no_regis && Hash::check($request->password, $r['password'])) {

                $request->session()->put('id', $r['id']);
                $request->session()->put('no_regis', $r['no_regis']);
                return redirect()->intended('/')->with('success', 'Login berhasil');
            }
        }

        return back()->with('failed', 'Login Failed');
    }
    public function logout(Request $request)
    {

        $request->session()->forget('id');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
