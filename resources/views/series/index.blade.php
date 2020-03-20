@extends('layout')



@section('conteudo')
<ul class="list-group rounded shadow-lg p-5">
  <h4 class="text-center mb-3">List all Series and Movies</h4>

    @if(!empty($messages))
    <div class="alert alert-success" role="alert">
        {{ $messages }}
    </div>
    @endif

  @foreach($series as $serie)
    <li class="list-group-item d-flex justify-content-between flex-row">
        <p>{{ $serie->nome }}</p>
        {{$serie->id}}
        <form method="post" action="/series/remover/{{$serie->id}}">
            @csrf
            <button class="btn btn-danger">
                Remover
            </button>
        </form>
    </li>
  @endforeach

  <div class="d-flex flex-row mt-4 justify-content-end">

    <a
      href="/series/create"
      type="button"
      class="btn btn-dark text-white"
    >Add new serie</a>

  </div>

</ul>
@endsection
