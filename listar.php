<?php
//chama o arquivo de conexão com o bd
include 'config/db.php';

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset=UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <Title>Lista</Title>
    
</head>

<body>
<div class="container">
    <button class="btn btn-success my-4"> <a href="usuario.php" 
    class="text-light"> Add Novo Cadastro</a>
    </button>
    
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
    $sql =$con->query("SELECT * FROM pessoas order by id_pessoa ASC");
    $rows = $sql->fetchall(PDO::FETCH_ASSOC);

   foreach($rows as $row) {
    
  
       echo "<tr class='table-light'>";  // abre uma linha
       echo("<td>".$row["id_pessoa"]."</td>");
       echo("<td>".$row["nome"]."</td>");
       echo("<td>".$row["endereco"]."</td>");
       echo("<td>".$row["telefone"]."</td>");
       echo("<td>".$row["email"]."</td>");
       echo("<td>" .(new DateTime($row["data_nascimento"]))->format('d/m/Y')."</td>"); 
       echo '<td><button class="btn btn-warning btn-xs" name="id_pessoa" ><a onclick="funcao2()" href="update.php?updateid_pessoa='.$row['id_pessoa'].'" class="text-light">Update</a></button></td>';
       echo '<td><button class="btn btn-danger btn-xs" name="id_pessoa" ><a onclick="alertMessage()" href="delete.php?deleteid_pessoa='.$row['id_pessoa'].'"class="text-light">Delete</a></button></td>';
        
       echo "</tr>";  // fecha linha

   }
   

    ?>

  </tbody>
</table>
</div>
</body>
</html>


