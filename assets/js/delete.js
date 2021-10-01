$(document).ready(function () {

    $('.delete-btn').click(function (e) { 
    e.preventDefault();
    let idPessoa = $(this).data('id')
    
    swal({
    title: "Tem certeza que quer excluir?",
    text: "ATENÇÃO!! Uma vez excluído, não poderá voltar a informação!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
    
    $.ajax({
    url: 'http://localhost/cadastro/delete.php',
    method: 'POST',
    data: {idPessoa: idPessoa},
    dataType: 'json'
    }).done(function(result){
    console.log(result);
    
    if(result == true){
    swal("Deletado com sucesso!", {
    icon: "success",
    });
    setTimeout(function () {
    window.location.href="http://localhost/cadastro/listar.php";
    }, 1500);
    }else{
    swal("Erro ao deletar usuário!", {
    icon: "error",
    });
    }
    });
    } else {

    }
    });
    console.log(idPessoa)
    });
    });