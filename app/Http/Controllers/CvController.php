<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class cvController extends Controller
{
    public function index()
    {
        // Attempt to retrieve the CV from cache
        $cv = Cache::remember('cv', 604800, function () {
            return json_decode(Storage::disk('local')->get('cv.json'), true);
        });
        return view('cv', ['cv' => $cv]);
    }
}
