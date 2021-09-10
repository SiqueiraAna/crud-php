<?php
include 'config/db.php';
$id_pessoa=$_GET['updateid_pessoa'];

// $sql="SELECT * FROM `pessoas` where id_pessoa=$id_pessoa";
// $result=query($con,$sql);
// $rows = $statement->fetchall(PDO::FETCH_ASSOC);

if(isset($_POST['submit'])){
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $data_nascimento=$_POST['data_nascimento'];


    $sql = $con->prepare ("update`pessoas` set id_pessoa='$id_pessoa', nome='$nome',endereco='$endereco', 
    telefone='$telefone', email='$email', data_nascimento='$data_nascimento' where id_pessoa=$id_pessoa");
    $result=query($con,$sql);

    if($result){
      echo "update com sucesso";
     header('location:display.php');
       
    }else{
        die(query($con));
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

    <title>Update</title><br>
 
    <script>
    function funcao1()
    {
    alert("Update efetuado com sucesso!");
    }
    </script>
    <br>
  </head>
  <body>
  <div style="text-align:center; font-size: 2.1em; color: #000000;">Atualize seu cadastro!</div>
    <div class="container">
    <form method="post">
    <div class="form-group">
    <label>Nome:</label>
    <input type="text" class="form-control" placeholder="Nome Completo" name="nome" autocomplete="off" value=<?php echo $nome; ?>>
    </div>
   <br>
    <div class="form-group">
    <label>Endereço:</label>
    <input type="text" class="form-control" placeholder="Endereço" name="endereco" autocomplete="off" value=<?php echo $endereco; ?>>
    </div>
    <br>
    <div class="form-group">
    <label>Telefone:</label>
    <input type="text" class="form-control" placeholder="Telefone" name="telefone" autocomplete="off" value=<?php echo $telefone; ?>>
    </div>
    <br>
    <div class="form-group">
    <label>Email:</label>
    <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off" value=<?php echo $email; ?>>
    </div>
    <br>
    <div class="form-group">
    <label>Data Nascimento:</label>
    <input type="date" class="form-control" placeholder="Data Nascimento" name="data_nascimento" autocomplete="off" value=<?php echo $data_nascimento; ?>>
    </div>
    <br>
  <button type="submit" name="submit" class="btn btn-outline-success" onclick="funcao1()">Update</button>
</form>
    </div>
   
  </body>
</html>

