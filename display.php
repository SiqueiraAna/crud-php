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
    <button class="btn btn-primary my-5"> <a href="usuario.php"  class="text-light"> Novo cadastro</a></button>
    <button class="btn btn-primary my-5"> <a href="update.php" class="text-light"> </a>Update</button>
    <button class="btn btn-danger my-5"> <a href="delete.php?deleteid_pessoa=' .$id_pessoa.'" class="text-light"> </a>Delete</button>

    <table class="table">
  <thead>
    <tr> 
      <th>Nome</th>
      <th>Endereço</th>
      <th>Telefone</th>
      <th>Email</th>
      <th>Data Nascimento</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
      
    <?php
    $statement =$con->query("SELECT * FROM pessoas");
    $rows = $statement->fetchall(PDO::FETCH_ASSOC);
//    var_dump($rows);
    // print_r($rows);


   foreach($rows as $row) {
       echo "<tr>";
       echo("<td>".$row["nome"]."</td>");
       echo("<td>".$row["endereco"]."</td>");
       echo("<td>".$row["telefone"]."</td>");
       echo("<td>".$row["email"]."</td>");
       echo("<td>".$row["data_nascimento"].  "</td>");  
       echo("<td>".$row[""].  "</td>");  
      
       echo "</tr>";

       //echo $row['nome']; 
   }
//    for ($i = 1; $i <= count($row); $i++) {

//         echo("<th>".$row["nome"]."</th>");

//         //var_dump($row);
//         //exit();   
//     }
    ?>

   

    
  </tbody>
</table>
</div>
</body>
</html>


