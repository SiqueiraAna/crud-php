<?php
include 'config/db.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Title>Página Inicial</Title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-4"> <a href="usuario.php" class="text-light"> Add New Users</a></button>

    <table class="table ">
  <thead>
    <tr> 
      <th>Nome</th>
      <th>Endereço</th>
      <th>Telefone</th>
      <th>Email</th>
      <th>Data Nascimento</th>
      <th>Ações</th>
      <th></th>
    
      
    </tr>
  </thead>
  <tbody>
      
    <?php
    $statement =$con->query("SELECT * FROM pessoas");
    $rows = $statement->fetchall(PDO::FETCH_ASSOC);
//    var_dump($rows);
    // print_r($rows);


   foreach($rows as $row) {

    
       echo "<tr>";  // abre uma linha

       echo("<td>".$row["nome"]."</td>");
       echo("<td>".$row["endereco"]."</td>");
       echo("<td>".$row["telefone"]."</td>");
       echo("<td>".$row["email"]."</td>");
       echo("<td>".$row["data_nascimento"]."</td>"); 
       echo '<td><button class="btn btn-primary btn-xs"><a href="update.php?id_pessoa='.$row['id_pessoa'].'" class="text-light">Update </a></button></td>';
       echo '<td><button class="btn btn-danger  btn-xs"><a href="delete.php?id_pessoa='.$row['id_pessoa'].'" class="text-light">Delete </a></button></td>';
       echo "</tr>"; // fecha linha

      
   }

    ?>


  </tbody>
</table>
<!-- <a href="update.php" class="btn btn-primary btn-xs">Update</a>
<a href="delete.php"  class="btn btn-danger btn-xs">Delete</a> -->
</div>
</body>
</html>


