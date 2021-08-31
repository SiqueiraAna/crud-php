<?php
include 'config/db.php';
if(isset($_POST['submit'])){
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $data_nascimento=$_POST['data_nascimento'];

    // var_dump($nome);

    // var_dump($endereco);

    // var_dump($telefone);

    // var_dump($email);

    // var_dump($data_nascimento);

  

  
    $sql = $con->prepare ("INSERT INTO pessoas (nome,endereco,telefone,email,data_nascimento) values (?,?,?,?,?)");
    $result= $sql->execute([$nome,$endereco,$telefone,$email,$data_nascimento]);

    if($result){

        echo 'Cadastrado com sucesso';
    }else{
      die('Erro no cadastro');
    }
  
   
}
  
?>