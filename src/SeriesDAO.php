<?php
require_once "ConexaoBD.php";
require "Util.php";

class SeriesDAO
{
    public static function inserir($dados)
    {
        $conexao = ConexaoBD::conectar();

        $titulo = $dados['titulo'];
        $diretor = $dados['diretor'];
        $ano = $dados['ano'];
        $elenco = $dados['elenco'];
        $imagem = Util::salvarArquivo();
        $temporadas = $dados['temporadas'];
        $episodios = $dados['episodios'];
        $idcategoria = $dados['idcategoria'];
        $idclassificacao = $dados['idclassificacao'];

        
        $sql = "INSERT INTO serie
                (titulo, diretor, ano, elenco, imagem, temporadas, episodios, idcategoria, idclassificacao) 
                VALUES 
                (:titulo, :diretor, :ano, :elenco, :imagem, :temporadas, :episodios, :idcategoria, :idclassificacao)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':diretor', $diretor);
        $stmt->bindParam(':ano', $ano);
        $stmt->bindParam(':elenco', $elenco);
        $stmt->bindParam(':imagem', $imagem);
        $stmt->bindParam(':temporadas', $temporadas);
        $stmt->bindParam(':episodios', $episodios);
        $stmt->bindParam(':idcategoria', $idcategoria);
        $stmt->bindParam(':idclassificacao', $idclassificacao);
        $stmt->execute();
    }

    public static function listar()
    {
        $conexao = ConexaoBD::conectar();
        $sql = "SELECT * FROM serie";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $serie = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $serie;
    }
    
}