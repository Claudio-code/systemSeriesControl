@extends('layout')

@section('conteudo')
  <div class="rounded shadow-lg p-5 ">
    <h3 class="text-center mb-3">
      Create new Register for movie and serie
    </h3>
    <form action="" method="post">
      
      <div class="form-group">
        <label for="nameRegister">Name</label>
        <input 
          type="text" 
          required 
          class="form-control" 
          id="nameRegister"
          placeholder="Ex: Star Wars, The Lost"
        >
        <small class="form-text text-muted">
          Fill in field with serie or movie name 
        </small>
      </div>
      <button 
        type="submit" 
        class="btn btn-success"
      >Create new Register</button>

    </form>
  </div>
@endsection