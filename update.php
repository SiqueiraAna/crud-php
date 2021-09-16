<?php
//chama o arquivo de conexão com o bd
include 'config/db.php';

$id_pessoa = $_GET ['id_pessoa'];

// $pdo = $con;
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $sql = $con->prepare ("UPDATE `pessoas` set id_pessoa='$id_pessoa', nome='$nome',endereco='$endereco', 
//                       telefone='$telefone', email='$email', data_nascimento='$data_nascimento' where id_pessoa=78");

header("Location: display.php");
 




  // public function deleteuser($id_pessoa){
  //   include 'config/db.php';

  //   $sql = "DELETE from pessoas where id_pessoa = :id_pessoa";
  //   $autenticacao = $con->prepare($sql);
  //   $autenticacao->bindParam(':id_pessoa', $id_pessoa);
  //   $result = $autenticacao->execute()

  // }



// $id_pessoa = $_GET['updateid_pessoa'];

// $statement =$con->query("SELECT * FROM pessoas");
// $rows = $statement->fetchall(PDO::FETCH_ASSOC);

// if(isset($_POST['submit'])){
//   $id_pessoa = isset($_POST['id_pessoa']) ? $_POST['id_pessoa'] : null;
//     $nome=$_POST['nome'];
//     $endereco=$_POST['endereco'];
//     $telefone=$_POST['telefone'];
//     $email=$_POST['email'];
//     $data_nascimento=$_POST['data_nascimento'];



//     $statement =$con->query("update`pessoas` set id_pessoa='$id_pessoa', nome='$nome',endereco='$endereco', 
//     telefone='$telefone', email='$email', data_nascimento='$data_nascimento' where id_pessoa=:id_pessoa");
//     $rows = $statement->fetchall(PDO::FETCH_ASSOC);

    $sql = $con->prepare ("update`pessoas` set id_pessoa='$id_pessoa', nome='$nome',endereco='$endereco', 
    telefone='$telefone', email='$email', data_nascimento='$data_nascimento' where id_pessoa=$id_pessoa");
    $result=query($con,$sql);

    // if($result){
    //   echo "update com sucesso";
    //  header('location:display.php');
       
    // }else{
    //     die(query($con));
    // }
  


    ?>




?>

<?php
include 'config/db.php';

      
// if( isset($_POST['delete'])){
//   $sql = "DELETE FROM pessoas WHERE id_pessoa=" . $_POST['id_pessoa'];
//   if($con->query($sql) === TRUE){
//       echo "<div class='alert alert-success'>Successfully delete user</div>";
//   }
// }

?>
<!doctype html>
<html lang="en">

  <head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Página Inicial</title><br>
    <script>
    function funcao1()
    {
    alert("Cadastrado efetuado com sucesso!");
    }
    </script>
    
  </head>
  <body> 
    <div style="text-align:center; font-size: 3.1em; color: #0000CD;">Olá, Seja Bem-Vindo!
    <p>Faça seu cadastro</p></div>


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
  <button type="submit" name="submit" class="btn btn-primary" onclick="funcao1()">Cadastrar-se</button>
</form>
    </div>
   
  </body>
</html>
