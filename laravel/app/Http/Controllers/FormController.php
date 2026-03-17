<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function general()
    {
        return view('forms.general');
    }
}
