<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class LogoutController extends Controller
{
    public function index()
    {
        $nis = json_decode(Cookie::get('sipon_session'))->nis;
        //https://sipon.kyaigalangsewu.net/api/logout
        Http::asForm()->post('https://sipon.kyaigalangsewu.net/api/logout', [
            'nis' => $nis
        ]);
        setcookie('sipon_session', '', time() - 1);
        //https://sipon.kyaigalangsewu.net/logout
        return redirect('https://sipon.kyaigalangsewu.net/logout');
    }
}
