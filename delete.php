<?php
// incluindo o arquivo de conexão do banco de dados
include 'config/db.php';

if(isset($_POST['deleteid_pessoa'])){
    $id_pessoa=$_POST['deleteid_pessoa'];
   

        // redirecionando para a página de exibição (display.php no nosso caso)
        header("Location: display.php");
    
    
     

    
    // $sql = $con->query("DELETE FROM pessoas WHERE id_pessoa=01");
    // if($sql){
    //     echo "Delete com sucesso";
    //   } else {
    //     echo "Error updating record: " . $con->error;
}
    
