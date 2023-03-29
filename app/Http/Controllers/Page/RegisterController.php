<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        return view('user.formregister',[
            "data"=>$response['data'],
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

        $aktif=$response['data']['id'];
        $kuotaPa=intval($response['data']['quota_tahfidh_pa'])+intval($response['data']['quota_kitab_pa']);
        $kuotaPi=intval($response['data']['quota_tahfidh_pi'])+intval($response['data']['quota_kitab_pi']);
        $totalPa=40;
        $totalPi=40;
        foreach($pendaftar['data'] as $rows =>$r){
            if($r['option']=='1' && $r['setting_id']==$aktif){
                $totalPa++;
            }
        }
        foreach($pendaftar['data'] as $rows =>$r){
            if($r['option']=='2' && $r['setting_id']==$aktif){
                $totalPi++;
            }
        }

        if($request->option=='1'){
            if($totalPa>$kuotaPa){
                $next="n";
            }else{
                $next="y";
            }
        }else{
            if($totalPi>$kuotaPi){
                $next="n";
            }else{
                $next="y";
            }
        }


        return view('user.formregister1',[
            "data"=>$response['data'],
            "next"=>$next,
            "option"=>$request->option,
            "program"=>$request->program,
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
        $response = Http::withHeaders([
            'Accept' => 'aplication/json',
            'X-API-KEY' => 'siponapikey',
        ])->get('http://sipon.kyaigalangsewu.net/api/v1/psb/register',$request->all());


        if(@$response['message']=='Success'){
            return redirect('/')->with('status', 'Berhasil melakukan pendaftaran');
        }else{
            return back()->withInput()
            ->withErrors($response['errors']);
        }
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
