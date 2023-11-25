<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    // public function upload(Request $request)
    // {
    //     $file = request()->file('file')->store('files', 'public');

    //     return response()->json($file);
    // }

    public function downloadPdf()
    {
        $path = str_replace('\\', '', asset('pdfs/jarji-abuashvili-cv.pdf'));

        return response()->json($path);
    }
}
