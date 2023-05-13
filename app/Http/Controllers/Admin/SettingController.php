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
        // $SettingController = SettingController::create($validatedData);
        // return response()->json([
        //     'message' => 'Pembuatan Gelombang Berhasil',
        //     'data' => $SettingController
        // ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $SettingController = SettingController::find($id);
        // return response()->json([
        //     'message' => 'success',
        //     'data' => $SettingController
        // ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $SettingController = SettingController::find($id);
        // return response()->json([
        //     'message' => 'success',
        //     'data' => $SettingController
        // ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting = Http::withHeaders([
            'Authorization' => 'Bearer ' . json_decode(Cookie::get('sipon_session'))->token,
            'Accept' => 'application/json'
        ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/setting/1' . $id, $request->all());

        if (@$setting['message'] == "Success") {
            return redirect('/admin/gelombang')->with('success', 'Update Gelombang Berhasil'); //redire
        } else {
            return back()->with('error', 'Update Gelombang Gagal'); //redire
        }

        // $SettingController = SettingController::find($id);
        // $validatedData = $request->validate([
        //     'start_period' => 'required|date_format:Y-m-d H:i:s',
        //     'end_period' => 'required|date_format:Y-m-d H:i:s',
        //     'quota_kitab_pa' => 'required|integer|min:1',
        //     'quota_kitab_pi' => 'required|integer|min:1',
        //     'quota_tahfidh_pa' => 'required|integer|min:1',
        //     'quota_tahfidh_pi' => 'required|integer|min:1',
        // ]);
        // $SettingController->update($SettingController);
        // return response()->json([
        //     'message' => 'Pembuatan Gelombang Berhasil',
        //     'data' => $SettingController
        // ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $setting = Http::withHeaders([
            'Authorization' => 'Bearer ' . json_decode(Cookie::get('sipon_session'))->token,
            'Accept' => 'application/json'
        ])->delete('https://sipon.kyaigalangsewu.net/api/v1/psb/setting/1' . $id);
        return back()->with('success', 'Delete Gelombang Berhasil');
    }
}
