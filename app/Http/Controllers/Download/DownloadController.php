<?php

namespace App\Http\Controllers\Download;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download($filename)
    {
        $file = public_path() . "/storage/doc/" . $filename;
        // $path = storage_path('app/public/doc/' . $file);

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $filename, $headers);
    }
}
