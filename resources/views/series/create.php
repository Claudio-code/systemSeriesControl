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

    <title>Control for Series and Movies</title>
  </head>
<body>
  <header>
    <nav class="navbar navbar-light bg-dark" >
      <a class="navbar-brand" href="#">
        <div class="d-flex flex-row " style="align-items: center;">
          
          <h3 style="color: white;" >
            <i class="material-icons mr-3" style="color: white;">live_tv</i> 
            Control for Series and Movies
          </h3>
        </div>
      </a>
    </nav>
    <nav aria-label="breadcrumb " >
      <ol class="breadcrumb" style="background-color: #fafafa;">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active " aria-current="page">Create</li>
      </ol>
    </nav>
  </header>
  <main class="container rounded shadow-lg p-5 col-6">
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
  </main>
</body>
</html>