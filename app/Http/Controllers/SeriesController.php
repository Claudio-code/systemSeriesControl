<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{

  public function index(Request $request): string
  {
    try {

      $series = Serie::query()
          ->orderBy('nome')
          ->get();

      $messages = $request->session()->get('mensagem');

      return view('series.index', compact('series', 'messages'));

    } catch (\Exception $e) {

      return json_encode(array(
        'code' => $e->getCode(),
        'message' => $e->getMessage(),
        'file' => $e->getFile()
      ));
    }
  }

  public function create()
  {
    return view('series.create');
  }

  public function store(Request $request)
  {

    $serie = Serie::create($request->all());

    $request->session()
        ->flash(
            'mensagem',
            "Serie {$serie->id} criada com sucesso {$serie->nome}"
        );

    return redirect('/');
  }
}
