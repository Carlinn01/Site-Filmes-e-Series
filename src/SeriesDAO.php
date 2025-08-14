<?php
require_once "ConexaoBD.php";
require "Util.php";

class SeriesDAO
{
    public static function inserir($dados)
    {
        $conexao = ConexaoBD::conectar();
        $titulo = $dados['titulo'];
        $imagem = Util::salvarArquivo();
        $atores = $dados['atores'];
        $diretor = $dados['diretor'];
        $categoria = $dados['categoria'];
        $sinopse = $dados['sinopse'];
        $genero_id = $dados['genero_id'];
        
        $sql = "INSERT INTO series (titulo, imagem, atores, diretor, categoria, sinopse, genero_id) 
                VALUES (:titulo, :imagem, :atores, :diretor, :categoria, :sinopse, :genero_id)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':imagem', $imagem);
        $stmt->bindParam(':atores', $atores);
        $stmt->bindParam(':diretor', $diretor);
        $stmt->bindParam(':caregoria', $categoria);
        $stmt->bindParam(':sinopse', $sinopse);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->execute();
    }
    
    public static function listar()
    {
        $conexao = ConexaoBD::conectar();
        $sql = "SELECT s.*, g.nome as genero_nome FROM series s 
                LEFT JOIN generos g ON s.genero_id = g.id 
                ORDER BY s.titulo";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $series = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $series;
    }
}