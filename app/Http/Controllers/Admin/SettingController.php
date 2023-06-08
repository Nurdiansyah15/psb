<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Http::withHeaders([
            'Authorization' => 'Bearer ' . json_decode(Cookie::get('sipon_session'))->token,
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/setting/');

        return view('admin-page.gelombang', [
            'data' => $setting['data']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $request)
    {
        // dd($request->all());
        $setting = Http::withHeaders([
            'Authorization' => 'Bearer ' . json_decode(Cookie::get('sipon_session'))->token,
            'Accept' => 'application/json'
        ])->post('https://sipon.kyaigalangsewu.net/api/v1/psb/setting', $request->all());

        if (@$setting['message'] == "Success") {
            return redirect('/admin/gelombang')->with('success', 'Pembuatan Gelombang Berhasil'); //redire
        } else {
            return back()->with('error', 'Pembuatan Gelombang Gagal'); //redire
        }
    }
    //


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'start_period' => 'required',
            'end_period' => 'required',
            'quota_kitab_pa' => 'required',
            'quota_kitab_pi' => 'required',
            'quota_tahfidh_pa' => 'required',
            'quota_tahfidh_pi' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $Setting = Http::withHeaders([
        //     'Authorization' => 'Bearer ' . json_decode(Cookie::get('sipon_session'))->token,
        //     'Accept' => 'application/json'
        // ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/setting/1' . $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->status == 1) {
            // echo "1";
            echo $setting = Http::withHeaders([
                'X-API-KEY' => config('app.api_key'),
                'Accept' => 'application/json'
            ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/setDisableAll');
        }
        // dd($request->all());
        $setting = Http::withHeaders([
            'Authorization' => 'Bearer ' . json_decode(Cookie::get('sipon_session'))->token,
            'Accept' => 'application/json'
        ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/setting/' . $id, $request->all());

        // dd($setting->json());
        if ($setting['message'] == "Success") {
            return redirect('/admin/gelombang')->with('success', 'Update Gelombang Berhasil'); //redire
        } else {
            return back()->with('error', 'Update Gelombang Gagal'); //redire
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $setting = Http::withHeaders([
            'Authorization' => 'Bearer ' . json_decode(Cookie::get('sipon_session'))->token,
            'Accept' => 'application/json'
        ])->delete('https://sipon.kyaigalangsewu.net/api/v1/psb/setting/' . $id);
        return back()->with('success', 'Delete Gelombang Berhasil');
    }
}
