<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function lista()
    {
        return view('ogolne.start');
    }

    public function kontakt()
    {
        return view('ogolne.kontakt');
    }

    public function onas()
    {
        $zadania = [
            'Zadania 1',
            'Zadania 2',
            'Zadania 3'
        ];
        return view('ogolne.onas')->with('zadania',$zadania);
    }
}
