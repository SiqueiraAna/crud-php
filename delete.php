<?php
// incluindo o arquivo de conexão do banco de dados
include 'config/db.php';

if(isset($_GET['id_pessoa'])){
    $id_pessoa=$_GET['id_pessoa'];

    
 
    $sql = $con->query("DELETE FROM pessoas WHERE id_pessoa=id_pessoa");
    $statement = $con->prepare($sql);
    $statement->execute([':id_pessoa' => $id_pessoa])

       header('location:display.php');