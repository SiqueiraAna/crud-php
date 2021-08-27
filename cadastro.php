<?php
// echo '<pre>';
// print_r ($_POST);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Página Inicial</title>
  </head>
  <body>
<?php
require_once 'db.php';
//

if (!empty($_POST)){
// Verificar se está chegando alguma coisa diferente de null(vazio)
// Se essa condição for verdadeira, 
// Está chegando dados por POST e então posso tentar inserir no banco
// Obter as informações  do formulário ($_POST)

  try {
    // Preparar as informações
    // Montar a SQL (pgsql)
   
    $query= $pdo->prepare ("INSERT INTO public.pessoas
              (id_pessoa,nome, endereco, telefone, email, data_nascimento)
            VALUES 
              ( ':nome', ':endereco', ':telefone', ':email', ':data_nascimento')"); 
    $stmt= $this->db->prepare($query);
    $stmt->bindValue('');
    

    // Preparar a SQL (pdo)
  

    //Definir/Organizar os dados p/SQL
    // $dados = array(
   
    //   ':nome' => $_POST['nome'],
    //   ':endereco' => $_POST['endereco'],
    //   ':telefone' => $_POST['telefone'],
    //   ':email' => $_POST['email'],
    //   ':data_nascimento' => $_POST['data_nascimento']

    // );

    // Tentar Executar a SQL (INSERT)
    // Realizar a inserção das informações no BD (com o PHP)
    if($stmt->execute($dados)){
      header("Location:index.php?msgSucesso=Cadastro realizado com sucesso!");
    }
  } catch (PDOException $e){
      // die($e->getMessage());
      header("Location:index.php?msgErro=Falha ao cadastrar!");
    
  }
}
 else{
   header("Location:index.php?msgErro=Erro de acesso.");
 }
// die();            
           
   
//Redirencionar para a pagina inicial c/ mensagem de erro/sucesso          
            
    