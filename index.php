<?php
include ('db.php'); 
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

    //var_dump - Vai mostrar o tipo de dado, o tamanho e o valor. 

    // //prepara
    // $sql = $pdo->prepare ("INSERT INTO public.pessoa (id_pessoa,nome,endereco,telefone,email,data_nascimento) 
    // values (null,$nome,$endereco,$telefone,$email,$data_nascimento)");
    // $sql->execute([$nome,$endereco,$telefone,$email,$data_nascimento]);
    // echo 'Cadastrado com sucesso';
   

  
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
    
    <div class="container my-5">
    <form  method="post">
    <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" placeholder="Nome Completo" name="nome" autocomplete="off">
    </div>
   <br>
    <div class="form-group">
    <label>Endereço</label>
    <input type="text" class="form-control" placeholder="Endereço" name="endereco" autocomplete="off">
    </div>
    <br>
    <div class="form-group">
    <label>Telefone</label>
    <input type="text" class="form-control" placeholder="Telefone" name="telefone" autocomplete="off">
    </div>
    <br>
    <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Telefone" name="email" autocomplete="off">
    </div>
    <br>
    <div class="form-group">
    <label>Data Nascimento</label>
    <input type="date" class="form-control" placeholder="Data Nascimento" name="data_nascimento " autocomplete="off">
    </div>
    <br>
  <button type="submit" name="submit" class="btn btn-primary">Cadastrar-se</button>

 
</form>
    </div>
   
  </body>
</html>

