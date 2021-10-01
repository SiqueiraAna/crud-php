<?php
//chama o arquivo de conexão com o Banco de Dados 
include 'config/db.php';
//recuperar o valor de um diretorio que estou passando pela url.

$id_pessoa = ($_POST['idPessoa']);

//Metodo para exclusão de registros  
$pdo = $con;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "DELETE FROM pessoas WHERE id_pessoa = :id_pessoa";
$sql = $pdo->prepare($sql);
$result = $sql->execute(array($id_pessoa));

if($result){
    echo json_encode(true);
}else{
    echo json_encode(false);
}
?>
