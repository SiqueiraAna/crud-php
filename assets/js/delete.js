$(document).ready(function () {

    $('.delete-btn').click(function (e) { 
    e.preventDefault();
    let idPessoa = $(this).data('id')
    
    console.log(idPessoa)

    swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this imaginary file!",
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
    
    if(result == "Sucesso"){
    swal("Poof! Your imaginary file has been deleted!", {
    icon: "success",
    });
    setTimeout(function () {
    window.location.href="http://localhost/cadastro/listar.php";
    }, 1500);
    }else{
    swal("Hoje não", {
    icon: "error",
    });
    }
    });
    } else {
    swal("Your imaginary file is safe!");
    }
    });
    console.log(idPessoa)
    });
    });