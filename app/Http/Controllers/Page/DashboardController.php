<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = session('id');
        $response = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
        $data = $response->json()['data'];


        return view('user-page.dashboard-user', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $response = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, $request->all());
        $data = $response->status();

        if ($data !== 201) {
            return back()->with('failed', 'Gagal memperbaharui data. Silakan periksa kembali isian anda.');
        }
        return back()->with('success', 'Data berhasil diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * upload the specified resource from storage.
     */
    public function photo(Request $request, string $id)
    {
        $response = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
        $data = $response->json()['data'];

        $file = $request->file('path_photo');
        $ektensi = $file->extension();
        $nameFIle = $data['no_regis'] . '_photo'  . '.' . $ektensi;

        Storage::putFileAs('public/uploads/photo', $request->file('path_photo'), $nameFIle);


        $response2 = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, [
            'path_photo' => $nameFIle
        ]);
        $data = $response2->status();


        if ($data !== 201) {
            return redirect('/user')->with('failed', 'Gagal memperbaharui foto.');
        }
        return  redirect('/user')->with('success', 'Foto berhasil diperbaharui!');
    }
    /**
     * upload the specified resource from storage.
     */
    public function doc(Request $request, string $id)
    {
        $response = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
        $data = $response->json()['data'];

        $file = $request->file('path_doc');
        $ektensi = $file->extension();

        if ($ektensi != 'pdf') {
            return redirect('/user')->with('failed', 'Gagal memperbaharui berkas, ekstensi file tidak benar.');
        }

        $nameFIle = $data['no_regis'] . '_doc'  . '.' . $ektensi;

        Storage::putFileAs('public/uploads/doc', $request->file('path_doc'), $nameFIle);


        $response2 = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, [
            'path_doc' => $nameFIle
        ]);
        $data = $response2->status();


        if ($data !== 201) {
            return redirect('/user')->with('failed', 'Gagal memperbaharui berkas.');
        }
        return  redirect('/user')->with('success', 'Berkas berhasil diperbaharui!');
    }
    /**
     * upload the specified resource from storage.
     */
    public function bill(Request $request, string $id)
    {
        $response = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
        $data = $response->json()['data'];

        $file = $request->file('path_bill');
        $ektensi = $file->extension();
        $nameFIle = $data['no_regis'] . '_bill'  . '.' . $ektensi;

        Storage::putFileAs('public/uploads/bill', $request->file('path_bill'), $nameFIle);


        $response2 = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, [
            'path_bill' => $nameFIle
        ]);
        $data = $response2->status();

        if ($data !== 201) {
            return redirect('/user')->with('failed', 'Gagal memperbaharui dokumen.');
        }
        return  redirect('/user')->with('success', 'Dokumen berhasil diperbaharui!');
    }
    /**
     * upload the specified resource from storage.
     */
    public function mutasi(Request $request, string $id)
    {
        $response = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
        $data = $response->json()['data'];

        $file = $request->file('path_mutasi_emis');
        $ektensi = $file->extension();


        if ($ektensi != 'pdf') {
            return redirect('/user')->with('failed', 'Gagal memperbaharui berkas, ekstensi file tidak benar.');
        }

        $nameFIle = $data['no_regis'] . '_mutasi'  . '.' . $ektensi;

        Storage::putFileAs('public/uploads/mutasi', $request->file('path_mutasi_emis'), $nameFIle);


        $response2 = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, [
            'path_mutasi_emis' => $nameFIle,
            'previous_pondok_name' => $request->previous_pondok_name,
            'previous_pondok_address' => $request->previous_pondok_address,
        ]);
        $data = $response2->status();

        if ($data !== 201) {
            return redirect('/user')->with('failed', 'Gagal memperbaharui surat mutasi.');
        }
        return  redirect('/user')->with('success', 'Dokumen emis diperbaharui!');
    }

    /**
     * print  the specified resource from storage.
     */
    public function print(string $id)
    {

        $response = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' .  Crypt::decryptString($id));
        $data = $response->json()['data'];

        return view('user-page.print-form.form', [
            'data' => $data
        ]);
    }
}
