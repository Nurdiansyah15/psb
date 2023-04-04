<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'nik' => 'nullable|size:16',
            'no_kk' => 'nullable|size:16',
            'nisn' => 'nullable|size:10',
            'no_kip' => 'nullable|size:6',
            'no_kks' => 'nullable|size:6',
            'no_pkh' => 'nullable|size:6',
        ], [
            'nik.size' => 'Jumlah angka harus tepat 16',
            'no_kk.size' => 'Jumlah angka harus tepat 16',
            'nisn.size' => 'Jumlah angka harus tepat 10',
            'no_kip.size' => 'Jumlah angka/huruf harus tepat 6',
            'no_kks.size' => 'Jumlah angka/huruf harus tepat 6',
            'no_pkh.size' => 'Jumlah angka/huruf harus tepat 6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with('data-failed', 'Gagal memperbaharui data. Silakan periksa kembali isian anda.')
                ->withInput();
        } else {
            $response = Http::withHeaders([
                'X-API-KEY' => config('app.api_key'),
                'Accept' => 'application/json'
            ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, $request->all());
            $data = $response->status();
            if ($data !== 201) {
                return back()->with('data-failed', 'Kesalahan pada server. Gagal memperbaharui data. Silakan ulang beberapa saat lagi.');
            }
            return back()->with('data-success', 'Data berhasil diperbaharui!');
        }
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
        $validator = Validator::make($request->all(), [
            'path_photo' => 'bail|nullable|file|mimes:jpg,png,jpeg,JPG,PNG,JPEG|max:1048', //1 Mb
        ], [
            'path_photo.max' => 'Ukuran file harus dibawah 1 Mb.',
            'path_photo.file' => 'Masukan yang dikirim harus berupa objek file.',
            'path_photo.mimes' => 'Ekstensi file harus png, jpg, jpeg, PNG, JPG, atau JPEG.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with('data-failed', 'Gagal memperbaharui foto. Silakan periksa kembali persyaratannya.')
                ->withInput();
        } else {
            $response = Http::withHeaders([
                'X-API-KEY' => config('app.api_key'),
                'Accept' => 'application/json'
            ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
            $data = $response->json()['data'];

            $file = $request->file('path_photo');
            $ektensi = $file->getClientOriginalExtension();
            $uniqueString = Str::random(9);
            $nameFIle = $data['no_regis'] . '_' . $uniqueString . '_photo'  . '.' . $ektensi;

            if (Storage::exists('public/uploads/photo/' . $data['path_photo'])) {
                Storage::delete('public/uploads/photo/' . $data['path_photo']);
            }

            Storage::putFileAs('public/uploads/photo', $request->file('path_photo'), $nameFIle);

            $response2 = Http::withHeaders([
                'X-API-KEY' => config('app.api_key'),
                'Accept' => 'application/json'
            ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, [
                'path_photo' => $nameFIle
            ]);
            $data = $response2->status();


            if ($data !== 201) {
                return redirect('/user')->with('data-failed', 'Kesalahan Server, Gagal memperbaharui foto. Silakan coba kembali nanti');
            }
            return  redirect('/user')->with('data-success', 'Foto berhasil diperbaharui!');
        }
    }
    /**
     * upload the specified resource from storage.
     */
    public function doc(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'path_doc' => 'bail|nullable|file|mimes:pdf|max:1048', //1 Mb

        ], [
            'path_doc.max' => 'Ukuran file harus dibawah 1 Mb.',
            'path_doc.file' => 'Masukan yang dikirim harus berupa objek file.',
            'path_doc.mimes' => 'Ekstensi file harus pdf.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with('data-failed', 'Gagal memperbaharui berkas. Silakan periksa kembali persyaratannya.')
                ->withInput();
        } else {
            $response = Http::withHeaders([
                'X-API-KEY' => config('app.api_key'),
                'Accept' => 'application/json'
            ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
            $data = $response->json()['data'];

            $file = $request->file('path_doc');
            $ektensi = $file->getClientOriginalExtension();
            $uniqueString = Str::random(9);
            $nameFIle = $data['no_regis'] . '_' . $uniqueString . '_doc'  . '.' . $ektensi;


            if (Storage::exists('public/uploads/doc/' . $data['path_doc'])) {
                Storage::delete('public/uploads/doc/' . $data['path_doc']);
            }

            Storage::putFileAs('public/uploads/doc', $request->file('path_doc'), $nameFIle);

            $response2 = Http::withHeaders([
                'X-API-KEY' => config('app.api_key'),
                'Accept' => 'application/json'
            ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, [
                'path_doc' => $nameFIle
            ]);
            $data = $response2->status();

            if ($data !== 201) {
                return redirect('/user')->with('data-failed', 'Kesalahan Server, Gagal memperbaharui berkas. Silakan coba kembali nanti');
            }
            return  redirect('/user')->with('data-success', 'Berkas berhasil diperbaharui!');
        }
    }
    /**
     * upload the specified resource from storage.
     */
    public function bill(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'path_bill' => 'bail|nullable|file|mimes:pdf,jpg,png,jpeg,JPG,PNG,JPEG|max:1048', //1 Mb
        ], [
            'path_bill.max' => 'Ukuran file harus dibawah 1 Mb.',
            'path_bill.file' => 'Masukan yang dikirim harus berupa objek file.',
            'path_bill.mimes' => 'Ekstensi file harus pdf, jpg, png, jpeg, JPG, PNG, atau JPEG.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with('data-failed', 'Gagal memperbaharui bukti pendaftaran. Silakan periksa kembali persyaratannya.')
                ->withInput();
        } else {
            $response = Http::withHeaders([
                'X-API-KEY' => config('app.api_key'),
                'Accept' => 'application/json'
            ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
            $data = $response->json()['data'];

            $file = $request->file('path_bill');
            $ektensi = $file->getClientOriginalExtension();
            $uniqueString = Str::random(9);
            $nameFIle = $data['no_regis'] . '_' . $uniqueString . '_bill'  . '.' . $ektensi;

            if (Storage::exists('public/uploads/bill/' . $data['path_bill'])) {
                Storage::delete('public/uploads/bill/' . $data['path_bill']);
            }

            Storage::putFileAs('public/uploads/bill', $request->file('path_bill'), $nameFIle);


            $response2 = Http::withHeaders([
                'X-API-KEY' => config('app.api_key'),
                'Accept' => 'application/json'
            ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, [
                'path_bill' => $nameFIle
            ]);
            $data = $response2->status();

            if ($data !== 201) {
                return redirect('/user')->with('data-failed', 'Kesalahan Server, Gagal memperbaharui bukti pendaftaran. Silakan coba kembali nanti');
            }
            return  redirect('/user')->with('data-success', 'Bukti pendaftaran berhasil diperbaharui!');
        }
    }
    /**
     * upload the specified resource from storage.
     */
    public function mutasi(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'path_mutasi_emis' => 'bail|nullable|file|mimes:pdf|max:1048', //1 Mb

        ], [
            'path_mutasi_emis.max' => 'Ukuran file harus dibawah 1 Mb.',
            'path_mutasi_emis.file' => 'Masukan yang dikirim harus berupa objek file.',
            'path_mutasi_emis.mimes' => 'Ekstensi file harus pdf.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with('data-failed', 'Gagal memperbaharui berkas mutasi. Silakan periksa kembali persyaratannya.')
                ->withInput();
        } else {
            $response = Http::withHeaders([
                'X-API-KEY' => config('app.api_key'),
                'Accept' => 'application/json'
            ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
            $data = $response->json()['data'];

            $file = $request->file('path_mutasi_emis');
            $ektensi = $file->getClientOriginalExtension();
            $uniqueString = Str::random(9);
            $nameFIle = $data['no_regis'] . '_' . $uniqueString . '_mutasi'  . '.' . $ektensi;

            if (Storage::exists('public/uploads/mutasi/' . $data['path_mutasi_emis'])) {
                Storage::delete('public/uploads/mutasi/' . $data['path_mutasi_emis']);
            }

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
                return redirect('/user')->with('data-failed', 'Kesalahan Server. Gagal memperbaharui surat mutasi. Silakan coba kembali nanti');
            }
            return  redirect('/user')->with('data-success', 'Berkas mutasi emis diperbaharui!');
        }
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
