<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegaldocumnetController extends Controller
{
    public function index()
    {
        return view('frontend.legaldocuments');
    }
}
