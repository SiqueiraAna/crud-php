<?php
//chama o arquivo de conexão com o bd
include 'config/db.php';

if(isset($_POST['submit'])){
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $data_nascimento=$_POST['data_nascimento'];

 
    $sql = "UPDATE pessoas SET nome='$nome', endereco='$endereco', telefone='$telefone', email='$email', data_nascimento='$data_nascimento' WHERE id_pessoa='id_pessoa'";

    $sql = $pdo->prepare($sql);
    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':endereco', $endereco);
    $sql->bindParam(':telefone', $telefone);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':data_nascimento', $data_nascimento);
    $result = $sql->execute();

    if(!$result){
        header("Location:listar.php");
        // var_dump($sql->erroInfo());
        exit();
    }else{
        // echo $sql->rowCount() . "linha atualizada";
        die();
    }

  }
  
?>