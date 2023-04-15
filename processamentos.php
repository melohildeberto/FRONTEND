<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Curso Web Treina Recife</h1>
  <p>HTML, CSS, Java Script</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="index.html">Home</a>
          </li>
      <li class="nav-item">
        <a class="nav-link active" href="cadastro.html">Cadastro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="listar.html">Listar</a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row" >
    
    <div class="col-sm-12">
        <!-- AQUI O DESIGN ESPECÍFICO -->
        <?php

            echo "Nome: ".$_POST["nome"];

        ?>
    </div>
  </div>
</div>




</body>
</html>
