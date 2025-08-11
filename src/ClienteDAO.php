<?php
require_once "ConexaoBD.php";
require "Util.php";

class ClienteDAO
{
    public static function inserir($dados)
    {
        $conexao = ConexaoBD::conectar();

        $nome = $dados['nome'];
        $imagem = Util::salvarArquivo();

        $sql = "INSERT INTO clientes (nome, imagem) VALUES (:nome, :imagem)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':imagem', $imagem);
        $stmt->execute();
    }

    public static function listar()
    {
        $conexao = ConexaoBD::conectar();
        $sql = "SELECT * FROM clientes";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $clientes;
    }

}