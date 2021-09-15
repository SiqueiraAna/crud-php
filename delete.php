<?php
// incluindo o arquivo de conexão do banco de dados
include 'config/db.php';
//recuperar o valor de um diretorio que estou passando pela url.
$id_pessoa = ($_GET['deleteid_pessoa'] != '' ? $_GET['deleteid_pessoa'] : $id_pessoa );

var_dump($id_pessoa);


$pdo = $con;
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "DELETE FROM pessoas WHERE id_pessoa = :id_pessoa";
$q = $pdo->prepare($sql);
$q->execute(array($id_pessoa));
header("Location: display.php");
 

?>
