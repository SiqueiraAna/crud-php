<?php
// incluindo o arquivo de conexão do banco de dados
include 'config/db.php';

if(isset($_GET['deleteid_pessoa'])){
    $id_pessoa=$_GET['deleteid_pessoa'];

    
    $sql = $con->query("DELETE FROM pessoas WHERE id_pessoa=id_pessoa");
    $result->execute([':id_pessoa' => $id_pessoa]);
    if($result){
        // echo "Delete feito com sucesso"
        header('location:display.php');
    }else{
        die('Erro no delete');
    }

}