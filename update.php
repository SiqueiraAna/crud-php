<?php
include 'config/db.php';

if(isset($_POST['update'])){
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $data_nascimento=$_POST['data_nascimento'];

    $sql = $con->prepare('UPDATE pessoas WHERE id_pessoa = :id_pessoa');
    $stmt->execute(array(
    ':id_pessoa'   => $id_pessoa
    
    header('location:display.php');
  ));
