<!DOCTYPE php>
<php lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Filme</title>
    <link rel="stylesheet" href="/styles.css">
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
            <h2>Cadastro de Filmes</h2>
            <form action="cadastro-filmes.php" method="POST" enctype="multipart/form-data" class="row g-3">

                <div class="mb-3">
                    <label class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Digite o Título do Filme" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Diretor</label>
                    <input type="text" name="diretor" class="form-control" placeholder="Digite o nome do Diretor" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ano</label>
                    <input type="text" class="form-control" name="ano" placeholder="Digite o Ano de Lançamento" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Elenco</label>
                    <input type="text" class="form-control" name="elenco" placeholder="Digite o Elenco do Filme">
                </div>

                <div class="mb-3">
                    <label class="form-label">Prêmios</label>
                    <input type="text" class="form-control" name="premios" placeholder="Digite os Prêmios do Filme">
                </div>

                <div class="mb-3">
                    <label class="form-label">Categoria</label>
                    <select name="idcategoria" class="form-select">
                        <?php
                        require_once "src/CategoriaDAO.php";
                        $categoria = CategoriaDAO::listarCategoria();
                        foreach ($categoria as $cat) {
                            echo "<option value='{$cat['idcategoria']}'>{$cat['nome']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Classificação</label>
                    <select name="idclassificacao" class="form-select">
                        <?php
                        require_once "src/ClassificacaoDAO.php";
                        $classificacao = ClassificacaoDAO::listarClassificacao();
                        foreach ($classificacao as $class) {
                            echo "<option value='{$class['idclassificacao']}'>{$class['nome']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Imagem</label>
                    <input type="file" name="imagem" class="form-control">
                </div>

                <div>
                    <button type="submit" class="btn btn-danger">Cadastrar</button>
                </div>
            </form>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <p class="mb-1">© 2025 FilmesFlix.</p>
        <small>Desenvolvido por Carlos e Silvio</small>
    </footer>

</body>
</php>
