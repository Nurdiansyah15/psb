<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Http;
use App\Helpers\RegNumGenerator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftar = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->get('https://sipon.kyaigalangsewu.net/api/v1/psb/register');
        return view('admin-page.daftarsantri', [
            'data' => $pendaftar['data']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $fields = $request->validate([
            'no_regis' => 'string',
            'role' => 'string|required',
            'password' => 'string|required',
        ]);

        // p1000231
        $fields['no_regis'] = RegNumGenerator::get();

        $data = User::create($fields);

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
        $user = User::where('id', $id)->first();
        return view('user', [
            'user' => $user
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
        $response = Http::withHeaders([
            'X-API-KEY' => config('app.api_key'),
            'Accept' => 'application/json'
        ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, $request->all());

        // echo $response;
            if(@$response['message']=='Success'){
                return redirect('/admin/pendaftar')->with('status', 'Berhasil mengubah data');
            }else{
                return back()->withInput()
                ->withErrors($response['message']);
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $token = json_decode(Cookie::get('sipon_session'))->token;
        echo $pendaftar = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json'
        ])->delete('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id);
        // return back()->with('status', 'Data berhasil dihapus');
    }
}
