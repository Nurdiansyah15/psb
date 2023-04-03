<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ForgotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user-page.forgotpassword.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pendaftar = Http::withHeaders([
            'Accept' => 'aplication/json',
            'X-API-KEY' => 'siponapikey',
        ])->get('http://sipon.kyaigalangsewu.net/api/v1/psb/register');

        foreach ($pendaftar['data'] as $rows => $r) {
            if ($r['email'] == $request->email) {
                $id=$r['id'];
                $email=$r['email'];
                $password=Str::random(8);

                $response = Http::withHeaders([
                    'X-API-KEY' => config('app.api_key'),
                    'Accept' => 'application/json'
                ])->put('https://sipon.kyaigalangsewu.net/api/v1/psb/register/' . $id, [
                    'password'=>$password,
                ]);

                Mail::to('mmgrup17@gmail.com')->send(new ResetPassword());

                return view('user-page.forgotpassword.index')->with(['success'=>'Berhasil reset password']);
            }else{
$data=[
    'newpass'=>'123'
];
                Mail::to('mmgrup17@gmail.com')->send(new ResetPassword($data));

                return view('user-page.forgotpassword.index')->with(['error'=>'Email tidak ditemukan']);
            }
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
