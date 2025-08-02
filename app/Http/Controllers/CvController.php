<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class cvController extends Controller
{
    public function index()
    {
        $cv = json_decode(Storage::disk('local')->get('cv.json'), true);
        return view('cv', ['cv' => $cv]);
    }
}
