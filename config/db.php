<?php
require_once 'db.php';

class Db {

    private $host = 'localhost';
    private $dbname = 'empresa';
    private $user = 'postgres';
    private $password = '123456';

}

    public function conectar(){
        try {
            $db=new PDO(
                "pgsql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->password"
            );

            return $db;

        }

    }
// try {
// //conexão com o banco
// //Tentando fazer a conexão

// $db=new PDO("pgsql:host=localhost port=5432 dbname=empresa user=postgres password=123456"); 

// echo "Conectado no banco de dados com sucesso!!!";
// //   echo 'Conectado para o banco de dados<br/>';

} catch (PDOException $e){
// caso aconteça um erro, mostre o erro
echo "Falha ao conectar ao banco de dados";
    die($e->getMessage());
    //retorna a mensagem


}

?>