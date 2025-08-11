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
    
    public static function buscarPorId($id)
    {
        $conexao = ConexaoBD::conectar();
        $sql = "SELECT s.*, g.nome as genero_nome FROM series s 
                LEFT JOIN generos g ON s.genero_id = g.id 
                WHERE s.id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $serie = $stmt->fetch(PDO::FETCH_ASSOC);
        return $serie;
    }
    
    public static function atualizar($id, $dados)
    {
        $conexao = ConexaoBD::conectar();
        $titulo = $dados['titulo'];
        $atores = $dados['atores'];
        $diretor = $dados['diretor'];
        $categoria = $dados['categoria'];
        $sinopse = $dados['sinopse'];
        $genero_id = $dados['genero_id'];
        
        // Verifica se há nova imagem
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
            // Busca imagem antiga para excluir
            $serieAtual = self::buscarPorId($id);
            if ($serieAtual['imagem']) {
                Util::excluirArquivo($serieAtual['imagem']);
            }
            $imagem = Util::salvarArquivo();
            
            $sql = "UPDATE series SET titulo = :titulo, imagem = :imagem, atores = :atores, 
                    diretor = :diretor, categoria = :categoria, sinopse = :sinopse, 
                    genero_id = :genero_id WHERE id = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(':imagem', $imagem);
        } else {
            $sql = "UPDATE series SET titulo = :titulo, atores = :atores, diretor = :diretor, 
                    categoria = :categoria, sinopse = :sinopse, genero_id = :genero_id 
                    WHERE id = :id";
            $stmt = $conexao->prepare($sql);
        }
        
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':atores', $atores);
        $stmt->bindParam(':diretor', $diretor);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':sinopse', $sinopse);
        $stmt->bindParam(':genero_id', $genero_id);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    
    public static function excluir($id)
    {
        $conexao = ConexaoBD::conectar();
        
        // Busca imagem para excluir
        $serie = self::buscarPorId($id);
        if ($serie['imagem']) {
            Util::excluirArquivo($serie['imagem']);
        }
        
        $sql = "DELETE FROM series WHERE id = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
