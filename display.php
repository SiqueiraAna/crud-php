<?php
include 'config/db.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset=UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Title>Display</Title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-4"> <a href="usuario.php" class="text-light"> Novo Usuário</a></button>

    <table class="table">
  <thead class="table-dark">
    <tr> 

      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Data Nascimento</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
      
    <?php
    $statement =$con->query("SELECT * FROM pessoas");
    $rows = $statement->fetchall(PDO::FETCH_ASSOC);
//    var_dump($rows);
// rows - linhas 
    // print_r($rows);


   foreach($rows as $row) {
    
    
    // echo ;

    // exit();
       echo "<tr class='table-light'>";  // abre uma linha
       echo("<td>".$row["id_pessoa"]."</td>");
       echo("<td>".$row["nome"]."</td>");
       echo("<td>".$row["endereco"]."</td>");
       echo("<td>".$row["telefone"]."</td>");
       echo("<td>".$row["email"]."</td>");
       echo("<td>" .(new DateTime($row["data_nascimento"]))->format('d/m/Y')."</td>"); 
       echo '<td><button class="btn btn-success btn-xs"><a href="update.php?updateid='.$row['id_pessoa'].'" class="text-light">Update </a></button></td>';
       echo '<td><button class="btn btn-danger  btn-xs"><a href="delete.php?deleteid='.$row['id_pessoa'].'" class="text-light">Delete </a></button></td>';
       echo "</tr>";  // fecha linha

      
   }

    ?>


  </tbody>
</table>
<!-- <a href="update.php" class="btn btn-primary btn-xs">Update</a>
<a href="delete.php"  class="btn btn-danger btn-xs">Delete</a> -->
</div>
</body>
</html>


