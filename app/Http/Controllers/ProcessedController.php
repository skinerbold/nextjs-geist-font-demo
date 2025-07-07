<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessedController extends Controller
{
    public function index()
    {
        return view('processados');
    }
}
