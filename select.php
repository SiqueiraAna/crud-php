<?php
include 'config/db.php';

$statement =$con->query("SELECT * FROM pessoas");
$rows = $statement->fetchall(PDO::FETCH_ASSOC);
    // var_dump($rows);


?>