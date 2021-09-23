    <?php
    //chama o arquivo de conexão com o Banco de Dados 
    include 'config/db.php';

    $id_pessoa = ($_GET['updateid_pessoa'] != '' ? $_GET['updateid_pessoa'] : $id_pessoa );
     
    $pdo = $con;
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM pessoas WHERE id_pessoa = :id_pessoa";
    $sql = $pdo->prepare($sql);
    $sql->bindParam(':id_pessoa', $id_pessoa);
    $result = $sql->execute(array($id_pessoa));
    $rows= $sql->fetchAll(PDO::FETCH_ASSOC);
      
    ?>

    <!doctype html>
    <html lang="en">

      <head> 
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        <title>Update</title><br>
        
        <script>
          /* Função para Validação */
          function messageUpdate()
          {
          alert("Atualizado com sucesso!");
          }
          </script>
    
      </head>
      <body> 
        <div style="text-align:center; font-size: 3.1em; color: #A52A2A;">Atualize o seu cadastro!</div>
        <div class="container">
        <form action="atualizar.php" method="POST">

        <div class="form-group">
        <label>Nome:</label>
        <input type="text" class="form-control" placeholder="Nome Completo" name="nome" value="<?php echo($rows[0]["nome"])?>">
        </div>
        <br>

        <div class="form-group">
        <label>Endereço:</label>
        <input type="text" class="form-control" placeholder="Endereço" name="endereco" value="<?php echo($rows[0]["endereco"])?>">
        </div>
        <br>

        <div class="form-group">
        <label>Telefone:</label>
        <input type="text" class="form-control" placeholder="Telefone" name="telefone" value="<?php echo($rows[0]["telefone"])?>">
        </div>
        <br>

        <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo($rows[0]["email"])?>">
        </div>
        <br>

        <div class="form-group">
        <label>Data Nascimento:</label>
        <input type="date" class="form-control" placeholder="Data Nascimento" name="data_nascimento" value="<?php echo($rows[0]["data_nascimento"])?>">
        </div>
        <br>

        <!-- Input escondido para passar o ID para poder editar o usuário -->
        <input type="hidden" name="id_pessoa" value="<?php echo($rows[0]["id_pessoa"])?>" />  
 
        <button type="submit" name="submit" class="btn btn-danger" onclick="messageUpdate()" >Update</button>
        </form>
        </div>

      </body>
    </html>
