<?php
include 'config/db.php';

// $statement =$con->query("SELECT * FROM pessoas");
// $rows = $statement->fetchall(PDO::FETCH_ASSOC);
//     // var_dump($rows);


    $sql = 'SELECT * FROM pessoas';
    $result = $pdo->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<pre>';print_r($rows);echo '</pre>';
    echo '<hr/>';
?>