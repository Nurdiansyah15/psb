<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $response = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/setActive');
        $setting = $response->json()['data'];

        $response = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register');
        $registers = $response->json()['data'];
        // dd($registers);
        $program = "program";
        $option = "option";
        $tahfidh = "Tahfidh";
        $kitab = "Kitab";
        $putra = "1";
        $putri = "2";
        $gelombang = (string)$setting['id'];
        $setting_id = 'setting_id';

        $tahfidhPutra = array_filter($registers, function ($item) use ($program, $tahfidh, $option, $putra, $gelombang, $setting_id) {
            return isset($item[$program]) && $item[$program] === $tahfidh && isset($item[$option]) && $item[$option] === $putra && isset($item[$setting_id]) && $item[$setting_id] === $gelombang;
        });
        $tahfidhPutri = array_filter($registers, function ($item) use ($program, $tahfidh, $option, $putri, $gelombang, $setting_id) {
            return isset($item[$program]) && $item[$program] === $tahfidh && isset($item[$option]) && $item[$option] === $putri && isset($item[$setting_id]) && $item[$setting_id] === $gelombang;
        });
        $kitabPutra = array_filter($registers, function ($item) use ($program, $kitab, $option, $putra, $gelombang, $setting_id) {
            return isset($item[$program]) && $item[$program] === $kitab && isset($item[$option]) && $item[$option] === $putra && isset($item[$setting_id]) && $item[$setting_id] === $gelombang;
        });
        $kitabPutri = array_filter($registers, function ($item) use ($program, $kitab, $option, $putri, $gelombang, $setting_id) {
            return isset($item[$program]) && $item[$program] === $kitab && isset($item[$option]) && $item[$option] === $putri && isset($item[$setting_id]) && $item[$setting_id] === $gelombang;
        });

        $jmlTahfidhPutra = count($tahfidhPutra);
        $jmlTahfidhPutri = count($tahfidhPutri);
        $jmlKitabPutra = count($kitabPutra);
        $jmlKitabPutri = count($kitabPutri);

        $count = array(
            'tahfidh_pa' => $jmlTahfidhPutra,
            'kitab_pa' => $jmlKitabPutra,
            'tahfidh_pi' => $jmlTahfidhPutri,
            'kitab_pi' => $jmlKitabPutri
        );

        return view('admin-page.dashboardadmin', [
            'data' => $count
        ]);
    }
}
