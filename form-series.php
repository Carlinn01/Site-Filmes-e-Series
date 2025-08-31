<?php
session_start();

// Bloqueia acesso se não for admin
if (!isset($_SESSION["usuario_id"]) || $_SESSION["usuario_tipo"] !== 'admin') {
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <title>Acesso Negado</title>
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
      <style>
        body {
          background-color: #121212;
          color: #fff;
          font-family: 'Bebas Neue', sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          text-align: center;
        }
        .acesso-negado a {
          color: #fff;
          background-color: #e50914;
          padding: 10px 20px;
          border-radius: 5px;
          text-decoration: none;
          display: inline-block;
          margin-top: 15px;
          transition: background-color 0.3s;
        }
        .acesso-negado a:hover {
          background-color: #ff1c1c;
        }
      </style>
    </head>
    <body>
      <div class="acesso-negado">
        <h2>Acesso negado!</h2>
        <p>Você não tem permissão para acessar esta página.</p>
        <a href="index.php">Voltar para a página inicial</a>
      </div>
    </body>
    </html>
    <?php
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cadastrar Séries</title>
  <link rel="stylesheet" href="estilo-seriesflix.css" />
</head>
<body class="bg-dark">

  <header>
    <div class="container">
      <a class="TituloNav" href="index.php">
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
    <h2 class="titulo-filmesflix">Cadastro de Séries</h2>

    <form action="cadastro-series.php" method="POST" enctype="multipart/form-data" class="form-filmesflix">

      <div class="form-group">
        <label for="titulo" class="label-filmesflix">Título</label>
        <input type="text" id="titulo" name="titulo" class="input-filmesflix" placeholder="Digite o Título da Série" required />
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
        <input type="text" id="elenco" name="elenco" class="input-filmesflix" placeholder="Digite o Elenco da Série" />
      </div>

      <div class="form-group">
        <label for="temporadas" class="label-filmesflix">Temporadas</label>
        <input type="text" id="temporadas" name="temporadas" class="input-filmesflix" placeholder="Digite as Temporadas da Série" />
      </div>

      <div class="form-group">
        <label for="episodios" class="label-filmesflix">Episódios</label>
        <input type="text" id="episodios" name="episodios" class="input-filmesflix" placeholder="Digite os Episódios da Série" />
      </div>

      <div class="form-group">
        <label for="idcategoria" class="label-filmesflix">Categoria</label>
        <select id="idcategoria" name="idcategoria" class="select-filmesflix" required>
          <?php
          require_once "src/CategoriaDAO.php";
          $categoria = CategoriaDAO::listarCategoria();
          foreach ($categoria as $cat) {
            echo "<option value='{$cat['idcategoria']}'>{$cat['nomecategoria']}</option>";
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
            echo "<option value='{$class['idclassificacao']}'>{$class['nomeclassificacao']}</option>";
          }
          ?>
        </select>
      </div>

      <div class="form-group">
        <label for="imagem" class="label-filmesflix">Foto</label>
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
