<?php
//chama o arquivo de conexão com o bd
include 'config/db.php';

//Metodo para inclusão de novos registros  
if(isset($_POST['submit'])){
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $data_nascimento=$_POST['data_nascimento'];

    
    $sql = $con->prepare ("INSERT INTO pessoas (nome,endereco,telefone,email,data_nascimento) values (?,?,?,?,?)");
    $result= $sql->execute([$nome,$endereco,$telefone,$email,$data_nascimento]);

    if($result){
      header("Location:listar.php");
        $message = 'Cadastrado com sucesso';
    }else{
      die('Não ');
    }
  
   
}
  
?>