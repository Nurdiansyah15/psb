<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Encryption\DecryptException;

class CheckTokenAvailable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Cookie::get('sipon_session') !== null) {

            if ($request->data) {

                Cookie::queue('sipon_session', Crypt::decryptString($request->data), 10080);

                //https://psb.kyaigalangsewu.net/
                return redirect(asset('admin'));
            }

            $token = json_decode(Cookie::get('sipon_session'))->token;

            $response = Http::withHeaders([
                'Accept' => 'aplication/json',
                'Authorization' => 'Bearer ' . $token,
            ])->get('https://sipon.kyaigalangsewu.net/api/v1/token');

            // dd($response->status());

            if ($response->status() != 200) {

                setcookie('sipon_session', '', time() - 1);

                //https://sipon.kyaigalangsewu.net/logout
                return redirect('https://sipon.kyaigalangsewu.net/logout');
            }

            return $next($request);
        } else {
            if ($request->data) {

                Cookie::queue('sipon_session', Crypt::decryptString($request->data), 10080);

                //https://psb.kyaigalangsewu.net/
                return redirect(asset('admin'));
            } else {
                //https://sipon.kyaigalangsewu.net/
                return redirect('https://sipon.kyaigalangsewu.net/');
            }
        }
    }
}
