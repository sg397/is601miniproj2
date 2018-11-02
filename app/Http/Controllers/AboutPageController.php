<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{

    function about() {
        return view('pages.about');
    }
}
