<?php
include 'config/db.php';
$message = '';
if(isset($_POST['submit'])){
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $data_nascimento=$_POST['data_nascimento'];

    // var_dump($nome);


    // mudar a string para update, delete 

    $sql = $con->prepare ("INSERT INTO pessoas (nome,endereco,telefone,email,data_nascimento) values (?,?,?,?,?)");
    $result= $sql->execute([$nome,$endereco,$telefone,$email,$data_nascimento]);

    if($result){
     header('location:display.php');
        $message = 'Cadastrado com sucesso';
    }else{
      die('Erro no cadastro');
    }
  
   
}
  
?>