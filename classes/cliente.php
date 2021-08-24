<?php
class Cliente
{
    public function listar()
    {
        $query = "";
        $conn = new PDO("pgsql:host=localhost port=5432 dbname=ecommerce user=postgres password=123456"); 
        $resultado = conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}