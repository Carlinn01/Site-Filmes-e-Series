<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastrar Filme</title>
    <link rel="stylesheet" href="/styles.css" />
</head>
<body>

<header>
    <div class="container">
        <h1 class="TituloNav">FilmesFlix</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="filmes.php">Filmes</a>
            <a href="series.php">Séries</a>
        </nav>
    </div>
</header>

<main>
    <section>
        <h2 class="titulo-filmesflix">Cadastro de Filmes</h2>
        <form action="cadastro-filmes.php" method="POST" enctype="multipart/form-data" class="form-filme">

            <div class="form-group">
                <label>Título</label>
                <input type="text" name="titulo" placeholder="Digite o Título do Filme" required />
            </div>

            <div class="form-group">
                <label>Diretor</label>
                <input type="text" name="diretor" placeholder="Digite o nome do Diretor" required />
            </div>

            <div class="form-group">
                <label>Ano</label>
                <input type="text" name="ano" placeholder="Digite o Ano de Lançamento" required />
            </div>

            <div class="form-group">
                <label>Elenco</label>
                <input type="text" name="elenco" placeholder="Digite o Elenco do Filme" />
            </div>

            <div class="form-group">
                <label>Prêmios</label>
                <input type="text" name="premios" placeholder="Digite os Prêmios do Filme" />
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select name="idcategoria">
                    <?php
                    require_once "src/CategoriaDAO.php";
                    $categoria = CategoriaDAO::listarCategoria();
                    foreach ($categoria as $cat) {
                        echo "<option value='{$cat['idcategoria']}'>{$cat['nome']}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Classificação</label>
                <select name="idclassificacao">
                    <?php
                    require_once "src/ClassificacaoDAO.php";
                    $classificacao = ClassificacaoDAO::listarClassificacao();
                    foreach ($classificacao as $class) {
                        echo "<option value='{$class['idclassificacao']}'>{$class['nome']}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Imagem</label>
                <input type="file" name="imagem" />
            </div>

            <div class="form-group">
                <button type="submit" class="btn-submit">Cadastrar</button>
            </div>

        </form>
    </section>
</main>

<footer>
    <p class="mb-1">© 2025 FilmesFlix.</p>
    <small>Desenvolvido por Carlos e Silvio</small>
</footer>

</body>
</html>
