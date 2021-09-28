  <?php
    //chama o arquivo de conexão com o Banco de dados
  include 'config/db.php';
  
  ?>
  <!doctype html>
  <html lang="en">

  <head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
    /* Função Validar */
    function funcaoAlert()
    {
    const nome = formCadastro.nome.value;
    const endereco = formCadastro.endereco.value;
    const telefone = formCadastro.telefone.value;
    const email = formCadastro.email.value;
    const data_nascimento = formCadastro.data_nascimento.value;
  
    // Verificar se o nome está vazio
      if(!nome){
        alert ("O campo Nome é obrigatório");
        formCadastro.nome.focus();
        return false; 
      }

      if(endereco == ""){
        alert ("O campo Endereço é obrigatório");
        formCadastro.endereco.focus();
        return false; 
      }

      if(telefone == ""){
        alert ("O campo Telefone é obrigatório");
        formCadastro.telefone.focus();
        return false; 
      }

      if(email == ""){
        alert ("O campo E-mail é obrigatório");
        formCadastro.email.focus();
        return false; 
      }

      if(data_nascimento == ""){
        alert ("O campo Data Nascimento é obrigatório");
        formCadastro.data_nascimento.focus();
        return false; 
      }
    }
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Página Inicial</title><br>
   
    
  </head>
  <body> 
    <div style="text-align:center; font-size: 3.1em; color: #0000CD;">Olá, Seja Bem-Vindo!
    <p>Faça seu cadastro</p></div>

    <div class="container">
    <form method="post" action="insert.php">
    <div class="form-group">

        <label>Nome Completo:</label>
        <input required pattern=".*\S+.*"  oninvalid="setCustomValidity('Por favor digite o nome')" onchange="try{setCustomValidity('')}catch(e){}"  
        type="text" class="form-control" placeholder=" Digite seu nome" name="nome" id="nome" >
        </div>
        <br>

        <div class="form-group">
        <label>Endereço:</label>
        <input required pattern=".*\S+.*"  oninvalid="setCustomValidity('Por favor digite o endereço')" onchange="try{setCustomValidity('')}catch(e){}"
        type="text" class="form-control" placeholder="Digite seu endereço" name="endereco" id="endereco">
        </div>
        <br>

        <div class="form-group">
        <label>Telefone:</label>
        <input required pattern=".*\S+.*"  oninvalid="setCustomValidity('Por favor digite o telefone')" onchange="try{setCustomValidity('')}catch(e){}" 
        type="number" class="form-control" placeholder="Digite seu telefone" name="telefone" id="telefone">
        </div>
        <br>

        <div class="form-group">
        <label>E-mail:</label>
        <input required pattern=".*\S+.*"  oninvalid="setCustomValidity('Por favor digite o e-mail')" onchange="try{setCustomValidity('')}catch(e){}" 
        type="text" class="form-control" placeholder="Digite seu e-mail" name="email" id="email">
        </div>
        <br>

        <div class="form-group">
        <label>Data Nascimento:</label>
        <input required pattern=".*\S+.*"  oninvalid="setCustomValidity('Por favor digite o e-mail')" onchange="try{setCustomValidity('')}catch(e){}" 
        type="date" class="form-control" placeholder="Data Nascimento" name="data_nascimento" id="data_nascimento">
        </div>
        <br>

     <button type="submit" name="submit" class="btn btn-primary" onclick="funcaoAlert()">Salvar</button>
    </form>
    </div>
    </body>
</html>

