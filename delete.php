<?php
// incluindo o arquivo de conexão do banco de dados
include 'config/db.php';
$id_pessoa = $_POST["id_pessoa"];
if(isset($_POST['deleteid_pessoa'])){
    $id_pessoa=$_POST['deleteid_pessoa'];

    
    $sql ="DELETE FROM `pessoas` WHERE id_pessoa=" .$id_pessoa;
    $result= $sql->execute();
        header ('location:display.php')
        if (!$result) {
    }else{
        // echo $sql . "<br>" . $error->getMessage();
    }

}