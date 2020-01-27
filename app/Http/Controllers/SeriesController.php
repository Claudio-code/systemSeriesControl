<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {

    public function index(Request $request) {

        $series = [
            'teste',
            'nova serie'
        ];

        return view('series.index', compact('series'));
    }
}
