<?php
//chama o arquivo de conexão com o bd
include 'config/db.php';

//Metodo para consulta de pessoas  
    $sql = 'SELECT * FROM usuario';
    $result = $con->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<pre>';print_r($rows);echo '</pre>';
    echo '<hr/>';
?>