<?php
require_once 'db.php';

class pessoa{

    private $id_pessoa;
    private $nome;
    private $endereco;
    private $telefone;
    private $email;
    private $data_nascimento;
}

public function __construct($nome, $endereco, $telefone, $email, $data_nascimento = '')
{
    $this->nome = nome;
    $this->endereco = endereco;
    $this->telefone = telefone;
    $this->email = email;
    $this->data_nascimento = data_nascimento;
}

