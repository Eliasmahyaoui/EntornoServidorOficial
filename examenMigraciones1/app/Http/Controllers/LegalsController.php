<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LegalsController extends Controller
{
    public function faq():View
    {

        return view('Legals.faq');
    }

    public function cookies():View
    {
        return view('Legals.cookies');
    }
}
