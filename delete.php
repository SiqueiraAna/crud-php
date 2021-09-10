<?php
// incluindo o arquivo de conexão do banco de dados
include 'config/db.php';

if(isset($_GET['deleteid_pessoa'])){
    $id_pessoa=$_GET['deleteid_pessoa'];

    
    $sql ="delete from `pessoas` where id_pessoa=" .$id_pessoa;
    $result=query($con,$sql);
    if(result){
        echo "deletado com sucesso";
        header('location: display.php')
    }else{

    }
   
