<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = new Client();
        $headers = [
        'Accept' => 'application/json',
        'X-API-KEY'=>'siponapikey'
        ];
        $request = new Request('GET', '{{base_url}}/api/v1/psb/setting/1', $headers);
        $res = $client->sendAsync($request)->wait();
        echo $res->getBody();

        // $setting = $res->getBody();
        // return view('user', [
        //     'users' => $santris
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $fields = $request->validate([
            'fullname' => 'string|required',
            'nickname' => 'string|required',
            'email' => 'string|email:rfc,dns|required',
            'program' => 'string|required',
            'option' => 'string|required',
        ]);
        $data = Santri::create($fields);

        if ($data) {
            return redirect()->back()->with('success', 'Data berhasil ditambahkan');
        }
        return redirect()->back()->withErrors('failed', 'Data gagal ditambahkan');
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
        $santri = Santri::where('id', $id)->first();
        return view('user', [
            'user' => $santri
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
        $fields = $request->validate([
            'fullname' => 'string',
            'nickname' => 'string',
            'email' => 'string|email:rfc,dns',
            'program' => 'string',
            'option' => 'string',
        ]);
        $santri = Santri::where('id', $id)->first();
        $data = $santri->update($fields);
        if ($data) {
            return redirect()->back()->with('success', 'Data berhasil diubah');
        }
        return redirect()->back()->withErrors('failed', 'Data gagal diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $santri = Santri::where('id', $id)->first();
        $data = $santri->delete();
        if ($data) {
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        }
        return redirect()->back()->withErrors('failed', 'Data gagal dihapus');
    }
}
