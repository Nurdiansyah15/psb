<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
use App\Mail\Pendaftaran;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withHeaders([
            'Accept' => 'aplication/json',
            'X-API-KEY' => 'siponapikey',
        ])->get('http://sipon.kyaigalangsewu.net/api/v1/psb/setActive');

        return view('register.startregister', [
            "data" => $response['data'],
        ]);
    }

    public function step2(Request $request)
    {
        $response = Http::withHeaders([
            'Accept' => 'aplication/json',
            'X-API-KEY' => 'siponapikey',
        ])->get('http://sipon.kyaigalangsewu.net/api/v1/psb/setActive');

        $pendaftar = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register');

        $aktif = $response['data']['id'];
        $kuotaPa = intval($response['data']['quota_tahfidh_pa']) + intval($response['data']['quota_kitab_pa']);
        $kuotaPi = intval($response['data']['quota_tahfidh_pi']) + intval($response['data']['quota_kitab_pi']);
        $totalPa = 0;
        $totalPi = 0;
        foreach ($pendaftar['data'] as $rows => $r) {
            if ($r['option'] == '1' && $r['setting_id'] == $aktif) {
                $totalPa++;
            }
        }
        foreach ($pendaftar['data'] as $rows => $r) {
            if ($r['option'] == '2' && $r['setting_id'] == $aktif) {
                $totalPi++;
            }
        }

        if ($request->option == '1') {
            if ($totalPa > $kuotaPa) {
                $next = "n";
            } else {
                $next = "y";
            }
        } else {
            if ($totalPi > $kuotaPi) {
                $next = "n";
            } else {
                $next = "y";
            }
        }

        if($request->type=='2'){
            $next = "y";
        }


        return view('register.formregister', [
            "data" => $response['data'],
            "next" => $next,
            "option" => $request->option,
            "program" => $request->program,
            "type" => $request->type,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Http::withHeaders([
            'Accept' => 'aplication/json',
            'X-API-KEY' => 'siponapikey',
        ])->get('http://sipon.kyaigalangsewu.net/api/v1/psb/register');
        foreach ($data['data'] as $r => $d) {
            if ($d['nik'] == $request->nik) {
                return redirect('daftar')->with('status', 'NIK Anda sudah terdaftar');
                return false;
            }

            if ($d['email'] == $request->email) {
                return redirect('daftar')->with('status', 'Email Anda sudah terdaftar');
                return false;
            }

            if ($d['phone'] == $request->phone) {
                return redirect('daftar')->with('status', 'No. Whatsapp Anda sudah terdaftar');
                return false;
            }
        }
        $response = Http::withHeaders([
            'Accept' => 'aplication/json',
            'X-API-KEY' => 'siponapikey',
        ])->post('http://sipon.kyaigalangsewu.net/api/v1/psb/register', $request->all());

        $id = $response['data']['id'];

        $dataku = Http::withHeaders([
            'Accept' => 'aplication/json',
            'X-API-KEY' => 'siponapikey',
        ])->get('http://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
        if($dataku['data']['type']=='1'){
            $type='Mukim';
        }else{
            $type='Kalong';
        }
        $detail = [
            'no_regis' => $dataku['data']['no_regis'],
            'nik' => $dataku['data']['nik'],
            'fullname' => $dataku['data']['fullname'],
            'email' => $dataku['data']['email'],
            'phone' => $dataku['data']['phone'],
            'program' => $dataku['data']['program'],
            'type' => $type,
            'password' => $request->password,
        ];
        if ($response['code'] == 400) {
            return back()->withInput()
                ->withErrors($response['errors']);
        } else {

            Mail::to($request->email)->send(new Pendaftaran($detail));
            $url = "/daftar/" . Crypt::encryptString($response->json()['data']['id']);
            return redirect($url)->with('status', 'Berhasil melakukan pendaftaran');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response = Http::withHeaders([
            'Accept' => 'aplication/json',
            'X-API-KEY' => 'siponapikey',
        ])->get('http://sipon.kyaigalangsewu.net/api/v1/psb/register/' . Crypt::decryptString($id));

        return view('register.endregister', [
            "data" => $response['data'],

        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
