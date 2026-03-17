<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    public function general()
    {
        return view('ui.general');
    }

    public function icons()
    {
        return view('ui.icons');
    }

    public function timeline()
    {
        return view('ui.timeline');
    }
}
