<?php
//chama o arquivo de conexão com o banco de dados
include 'config/db.php';


if(isset($_POST['submit'])){
  $id_pessoa = $_POST['id_pessoa'];
  $nome = $_POST['nome'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $data_nascimento = $_POST['data_nascimento'];


  $sql = "UPDATE usuario SET nome = :nome, endereco = :endereco, telefone = :telefone, email = :email, 
  data_nascimento = :data_nascimento WHERE id_pessoa = :id_pessoa";
  $sql = $con->prepare($sql);

  
  $sql->bindParam(':id_pessoa', $id_pessoa);
  $sql->bindParam(':nome', $nome);
  $sql->bindParam(':endereco', $endereco);
  $sql->bindParam(':telefone', $telefone);
  $sql->bindParam(':email', $email);
  $sql->bindParam(':data_nascimento', $data_nascimento);

  $result = $sql->execute();

  header('Location: listar.php'); 

  
  }
  

?>