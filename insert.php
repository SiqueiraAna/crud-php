<?php
//chama o arquivo de conexão com o bd
include 'config/db.php';

//Metodo para inclusão de novos registros 
//Verifica se os dados estão chegando via POST do formulário
if(isset($_POST['submit'])){

    $nome = trim($_POST['nome']);
    $endereco = trim ($_POST['endereco']);
    $telefone = ($_POST['telefone']);
    $email = trim ($_POST['email']);
    $data_nascimento = $_POST['data_nascimento'];

    // var_dump($_POST);
    

    $sql = $con->prepare ("INSERT INTO usuario (nome,endereco,telefone,email,data_nascimento) values (?,?,?,?,?)");
    $result= $sql->execute([$nome,$endereco,$telefone,$email,$data_nascimento]);

    if($result){
      header("Location:listar.php"); // redirecionamento de página 
        $message = 'Cadastrado com sucesso';
    }else{
      die('Não ');
    }
  
   
  }
  
?>