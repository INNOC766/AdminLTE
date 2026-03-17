<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidgetController extends Controller
{
    public function smallBox()
    {
        return view('widgets.small-box');
    }

    public function infoBox()
    {
        return view('widgets.info-box');
    }

    public function cards()
    {
        return view('widgets.cards');
    }
}
