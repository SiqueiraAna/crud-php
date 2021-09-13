<?php
// incluindo o arquivo de conexão do banco de dados
include 'config/db.php';

public function delete($id_pessoa){

    $id = isset($_GET['id_pessoa']) ? $_GET['id_pessoa'] : null;

// valida o ID
if (empty($id_pessoa))
{
    echo "ID não informado";
    exit;
}

// remove do banco
$PDO = con();
$sql = "DELETE FROM pessoas WHERE id_pessoa = :id_pessoa";
$stmt->bindParam(':id_pessoa', $id_pessoa); // this time, we'll use the bindParam method
$stmt->execute();
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao remover";
    print_r($stmt->errorInfo());
}

}


?>