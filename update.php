<?php
include 'config/db.php';

$id_pessoa = $_GET ['id_pessoa'];

$pdo = $con;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE pessoas set nome =  WHERE id_pessoa = :id";
$q = $pdo->prepare($sql);
$q->execute(array($id_pessoa));
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

    // $sql = $con->prepare ("update`pessoas` set id_pessoa='$id_pessoa', nome='$nome',endereco='$endereco', 
    // telefone='$telefone', email='$email', data_nascimento='$data_nascimento' where id_pessoa=$id_pessoa");
    // $result=query($con,$sql);

    // if($result){
    //   echo "update com sucesso";
    //  header('location:display.php');
       
    // }else{
    //     die(query($con));
    // }
  



?>
