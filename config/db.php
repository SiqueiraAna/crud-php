<?php
require_once 'db.php';

try {
//conexão com o banco
//Tentando fazer a conexão

$conn=new PDO("pgsql:host=localhost port=5432 dbname=empresa user=postgres password=123456"); 

echo "Conectado no banco de dados com sucesso!!!";

} catch (PDOException $e){
// caso aconteça um erro, mostre o erro
echo "Falha ao conectar ao banco de dados";
    die($e->getMessage());
    //retorna a mensagem

    


}
?>