<?php
include 'db.php'; 
if(isset($_POST['submit'])){
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $data_nascimento=$_POST['data_nascimento'];

    var_dump($nome);

    var_dump($endereco);

    var_dump($telefone);

    var_dump($email);

    var_dump($data_nascimento);

    $db="insert into public.pessoa (id_pessoa,nome,endereco,telefone,email,data_nascimento) 
    values (8,$nome,$endereco,$telefone,$email,$data_nascimento')";
    $result=pgsql_query($db,$pgsql);
    if($result){
      echo" Data inserted successfullhy";
    }else{
      die(pgsql_error($db));
      echo" erro";
    }

}
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Página Inicial</title>
  </head>
  <body>
     

    <br>
    
    <div class="container">
    <form  method="post">
    <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" placeholder="Nome Completo" name="nome">
    </div>
   <br>
    <div class="form-group">
    <label>Endereço</label>
    <input type="text" class="form-control" placeholder="Endereço" name="endereco">
    </div>
    <br>
    <div class="form-group">
    <label>Telefone</label>
    <input type="text" class="form-control" placeholder="Telefone" name="telefone">
    </div>
    <br>
    <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Telefone" name="email">
    </div>
    <br>
    <div class="form-group">
    <label>Data Nascimento</label>
    <input type="date" class="form-control" placeholder="Data Nascimento" name="data_nascimento">
    </div>
    <br>
  <button type="submit" name="submit" class="btn btn-primary">Cadastrar-se</button>

 
</form>
    </div>
   
  </body>
</html>