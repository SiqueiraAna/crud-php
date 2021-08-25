<?php


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col">
              <h1>Cadastro</h1>
              <form action="cadastro_script.php" method="POST">
  <div class="form-group">
    <label for="nome">Nome Completo:</label>
    <input type="text" class="form-control" name="nome">
    </div>

    <div class="form-group">
    <label for="endereco">Endereço:</label>
    <input type="text" class="form-control" name="endereco">
    </div>

    <div class="form-group">
    <label for="endereco">Telefone:</label>
    <input type="text" class="form-control" name="telefone">
    </div>

    <div class="form-group">
    <label for="endereco">Email:</label>
    <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
    <label for="endereco">Data de Nascimento:</label>
    <input type="date" class="form-control" name="dt_nascimento">
    </div>
    
    <div class="form-group">
    <input  type="submit" class="btn btn-success">
    </div>
</form>
              </div>
          </div>
      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>