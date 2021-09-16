<?php
//chama o arquivo de conexão com o bd
include 'config/db.php';

// $statement =$con->query("SELECT * FROM pessoas");
// $rows = $statement->fetchall(PDO::FETCH_ASSOC);
//     // var_dump($rows);

//Metodo para consulta de pessoas  
    $sql = 'SELECT * FROM pessoas';
    $result = $pdo->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<pre>';print_r($rows);echo '</pre>';
    echo '<hr/>';
?>