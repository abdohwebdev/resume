<?php

namespace App\Http\Controllers;
use Spatie\LaravelPdf\Facades\Pdf;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function __invoke()
    {
        $cv = Cache::remember('cv', 3600, function () {
            return json_decode(Storage::disk('local')->get('cv.json'), true);
        });

        return Pdf::view('download', ['cv' => $cv])->format('a4')->download('cv.pdf');
    }
}
