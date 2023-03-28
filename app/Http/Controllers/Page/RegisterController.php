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

        return view('user.formregister1',[
            "data"=>$response['data'],
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

            echo $response;
        // if(@$response['message']=='Success'){
        //     return redirect('/')->with('status', 'Berhasil melakukan pendaftaran');
        // }else{
        //     return back()->withInput()
        //     ->withErrors($response['errors']);
        // }
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
