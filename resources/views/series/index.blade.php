@extends('layout')



@section('conteudo')
<ul class="list-group rounded shadow-lg p-5">
  <h4 class="text-center mb-3">List all Series and Movies</h4>
        
  @foreach($series as $serie)
    <li class="list-group-item">
      <?= $serie; ?>
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