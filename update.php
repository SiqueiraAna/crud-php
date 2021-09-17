<?php
//chama o arquivo de conexão com o bd
include 'config/db.php';
$id_pessoa=$_GET['updateid_pessoa'];

if(isset($_POST['submit'])){
  $nome=$_POST['nome'];
  $endereco=$_POST['endereco'];
  $telefone=$_POST['telefone'];
  $email=$_POST['email'];
  $data_nascimento=$_POST['data_nascimento'];

  $sql="UPDATE pessoas set id_pessoa=$id_pessoa, nome=$nome, endereco=$endereco, telefone=$telefone, 
  email=$email, data_nascimento=$data_nascimento WHERE id_pessoa=?, nome=?, endereco=?, telefone=?, 
  email=?, data_nascimento=$?";
  $result = $pdo->query($sql);

  if ($result->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $con->error;
  }
  

}
    //  header('location:display.php');
   

  ?>

<!doctype html>
<html lang="en">

  <head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Update</title><br>
  
  </head>
  <body> 
    <div style="text-align:center; font-size: 3.1em; color: #A52A2A;">Atualize o seu cadastro!</div>

    <div class="container">
    <form action="insert.php" method="post">
    <div class="form-group">
    <label>Nome:</label>
    <input type="text" class="form-control" placeholder="Nome Completo" name="nome">
    </div>
   <br>
    <div class="form-group">
    <label>Endereço:</label>
    <input type="text" class="form-control" placeholder="Endereço" name="endereco">
    </div>
    <br>
    <div class="form-group">
    <label>Telefone:</label>
    <input type="text" class="form-control" placeholder="Telefone" name="telefone">
    </div>
    <br>
    <div class="form-group">
    <label>Email:</label>
    <input type="email" class="form-control" placeholder="Email" name="email">
    </div>
    <br>
    <div class="form-group">
    <label>Data Nascimento:</label>
    <input type="date" class="form-control" placeholder="Data Nascimento" name="data_nascimento">
    </div>
    <br>
  <button type="submit" name="submit" class="btn btn-danger" onclick="alerMessage()">Update</button>
</form>
    </div>
   
  </body>
</html>
