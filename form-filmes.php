<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastrar Filme</title>
  <link rel="stylesheet" href="estilo-seriesflix.css" />
</head>
<body class="bg-dark">

  <header>
    
    <div class="container">
        <a href="index.php" class="TituloNav">
      <h1 class="TituloNav">FilmesFlix</h1>
      </a>
      <nav>
        <a href="index.php">Início</a>
        <a href="filmes.php">Filmes</a>
        <a href="series.php">Séries</a>
      </nav>
    </div>
  </header>

  <main class="container">
    <h2 class="titulo-filmesflix">Cadastro de Filmes</h2>

    <form action="cadastro-filmes.php" method="POST" enctype="multipart/form-data" class="form-filmesflix">

      <div class="form-group">
        <label for="titulo" class="label-filmesflix">Título</label>
        <input type="text" id="titulo" name="titulo" class="input-filmesflix" placeholder="Digite o Título do Filme" required />
      </div>

      <div class="form-group">
        <label for="diretor" class="label-filmesflix">Diretor</label>
        <input type="text" id="diretor" name="diretor" class="input-filmesflix" placeholder="Digite o nome do Diretor" required />
      </div>

      <div class="form-group">
        <label for="ano" class="label-filmesflix">Ano</label>
        <input type="text" id="ano" name="ano" class="input-filmesflix" placeholder="Digite o Ano de Lançamento" required />
      </div>

      <div class="form-group">
        <label for="elenco" class="label-filmesflix">Elenco</label>
        <input type="text" id="elenco" name="elenco" class="input-filmesflix" placeholder="Digite o Elenco do Filme" />
      </div>

      <div class="form-group">
        <label for="premios" class="label-filmesflix">Prêmios</label>
        <input type="text" id="premios" name="premios" class="input-filmesflix" placeholder="Digite os Prêmios do Filme" />
      </div>

      <div class="form-group">
        <label for="idcategoria" class="label-filmesflix">Categoria</label>
        <select id="idcategoria" name="idcategoria" class="select-filmesflix" required>
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
        <label for="idclassificacao" class="label-filmesflix">Classificação</label>
        <select id="idclassificacao" name="idclassificacao" class="select-filmesflix" required>
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
        <label for="imagem" class="label-filmesflix">Imagem</label>
        <input type="file" id="imagem" name="imagem" class="input-filmesflix" />
      </div>

      <div class="form-group">
        <button type="submit" class="btn-filmesflix">Cadastrar</button>
      </div>

    </form>
  </main>

  <footer>
    <div class="container">
      <p class="mb-1">© 2025 FilmesFlix.</p>
      <small>Desenvolvido por Carlos e Silvio</small>
    </div>
  </footer>

</body>
</html>
