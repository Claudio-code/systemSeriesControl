<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link 
      rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
      crossorigin="anonymous"
    >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>Controle de series</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light bg-dark mb-5" >
        <a class="navbar-brand" href="#">
          <div class="d-flex flex-row " style="align-items: center;">
            
            <h3 style="color: white;" >
              <i class="material-icons mr-3" style="color: white;">live_tv</i> 
              Control series
            </h3>
          </div>
        </a>
      </nav>
    </header>
    <main class="container">
      <ul class="list-group rounded shadow-lg p-5">
        <h4 class="text-center mb-3">Lista de filmes e series</h4>
        <?php foreach($series as $serie): ?>
          <li class="list-group-item">
            <?= $serie; ?>
          </li>
        <?php  endforeach; ?>
        <div class="d-flex flex-row mt-4 justify-content-end">
          <button 
            type="button" 
            class="btn btn-dark"
          >Adicionar nova serie</button>

        </div>
      </ul>
    </main>
  </body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>