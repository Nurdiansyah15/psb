<?php

namespace App\Http\Controllers;

use App\Helpers\RegNumGenerator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user', [
            'users' => $users
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
        $fields = $request->validate([
            'no_regis' => 'string',
            'role' => 'string',
            'password' => 'string',
        ]);
        $user = User::where('id', $id)->first();
        $data = $user->update($fields);
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
        $user = User::where('id', $id)->first();
        $data = $user->delete();
        if ($data) {
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        }
        return redirect()->back()->withErrors('failed', 'Data gagal dihapus');
    }
}
