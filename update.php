<?php
//chama o arquivo de conexão com o bd
include 'config/db.php';

//código de inserir
if(isset($_GET["id_pessoa"])){

$id_pessoa = $_GET['id_pessoa'];

// var_dump($id_pessoa);

$pdo = $con;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//fazer a consulta sql
$sql = "SELECT * FROM pessoas WHERE id_pessoa= :id_pessoa";

//preparar a consulta
$sql = $pdo->prepare($sql);

$sql->bindParam(':id_pessoa', $id_pessoa);

// pdo execute a consulta
$result = $sql->execute(array($id_pessoa));

//buscar tudo 
$rows= $sql->fetchAll(PDO::FETCH_ASSOC);
}

if(isset($_POST['submit'])){
  $nome=$_POST['nome'];
  $endereco=$_POST['endereco'];
  $telefone=$_POST['telefone'];
  $email=$_POST['email'];
  $data_nascimento=$_POST['data_nascimento'];


  $sql = $con->prepare("UPDATE `pessoas` SET 'nome'='$nome', 'endereco'='$endereco', 'telefone'='$telefone', 'email'='$email', 'data_nascimento'='$data_nascimento' WHERE 'id_pessoa'='id_pessoa'");
  $result = $pdo->query($con);

 
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
    function funcao2()
    {
    alert("Tem certeza que deseja atualizar?");
    }
    </script>
  
  </head>
  <body> 
    <div style="text-align:center; font-size: 3.1em; color: #A52A2A;">Atualize o seu cadastro!</div>

    <div class="container">
    <form  method="POST">
    <div class="form-group">
    <label>Nome:</label>
    <input type="text" class="form-control" placeholder="Nome Completo" name="nome" value="<?php echo($rows[0]["nome"])?>">
    </div>
   <br>
    <div class="form-group">
    <label>Endereço:</label>
    <input type="text" class="form-control" placeholder="Endereço" name="endereco" value="<?php echo($rows[0]["endereco"])?>">
    </div>
    <br>
    <div class="form-group">
    <label>Telefone:</label>
    <input type="text" class="form-control" placeholder="Telefone" name="telefone" value="<?php echo($rows[0]["telefone"])?>">
    </div>
    <br>
    <div class="form-group">
    <label>Email:</label>
    <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo($rows[0]["email"])?>">
    </div>
    <br>
    <div class="form-group">
    <label>Data Nascimento:</label>
    <input type="date" class="form-control" placeholder="Data Nascimento" name="data_nascimento" value="<?php echo($rows[0]["data_nascimento"])?>">
    </div>
    <br>
  <button type="submit" name="submit" class="btn btn-danger" onclick="funcao2()">Update</button>
</form>
    </div>
   
  </body>
</html>
