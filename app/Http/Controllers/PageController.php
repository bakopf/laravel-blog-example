<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function datenschutz()
    {
        return view('pages.datenschutz');
    }

    public function impressum()
    {
        return view('pages.impressum');
    }

    public function kontakt()
    {
        return view('pages.kontakt');
    }
}
