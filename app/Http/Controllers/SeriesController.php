<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {
  
  public function index(Request $request): string {
    try {

      $series = [
        'A pantera Ruiva',
        'R-Man'
      ];
  
      return view('series.index', compact('series'));

    } catch (\Exception $e) {

      return json_encode(array(
        'code' => $e->getCode(),
        'message' => $e->getMessage(),
        'file' => $e->getFile()
      ));
    }
  }

  public function create() {
    return view('series.create');
  }
}
