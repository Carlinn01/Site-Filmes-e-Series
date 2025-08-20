<?php
require_once "src/SeriesDAO.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>FilmesFlix - Séries</title>
  <link rel="stylesheet" href="series.css">
</head>
<body>

<header id="top">
  <div class="container">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <a href="/index.php" class="TituloNav">
      <h1>FilmesFlix</h1>
    </a>
    <div class="page-title">Séries</div>  <!-- Título central grande -->
    <nav>
      <a href="/filmes.php">Filmes</a>
      <a href="/index.php">Home</a>
    </nav>
  </div>
</header>
<main>

  <!-- Drama -->
  <section id="drama">
    <?php $serie_drama = SeriesDAO::listarCategoria(1); ?>
    <h2>Séries de Drama</h2>
    <div class="cards-container">
      <?php for ($i = 0; $i < count($serie_drama); $i++) { ?>
        <div class="card">
          <img src="uploads/<?= $serie_drama[$i]["imagem"] ?>" alt="<?= $serie_drama[$i]["titulo"] ?>">
          <h3 class="card-title"><?= $serie_drama[$i]["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie_drama[$i]["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie_drama[$i]["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie_drama[$i]["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie_drama[$i]["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie_drama[$i]["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie_drama[$i]['nomeclassificacao'] ?></p>
        </div>
      <?php } ?>
    </div>
  </section>

  <!-- Ação -->
  <section id="acao">
    <?php $serie_acao = SeriesDAO::listarCategoria(2); ?>
    <h2>Séries de Ação</h2>
    <div class="cards-container">
      <?php for ($i = 0; $i < count($serie_acao); $i++) { ?>
        <div class="card">
          <img src="uploads/<?= $serie_acao[$i]["imagem"] ?>" alt="<?= $serie_acao[$i]["titulo"] ?>">
          <h3 class="card-title"><?= $serie_acao[$i]["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie_acao[$i]["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie_acao[$i]["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie_acao[$i]["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie_acao[$i]["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie_acao[$i]["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie_acao[$i]['nomeclassificacao'] ?></p>
        </div>
      <?php } ?>
    </div>
  </section>

  <!-- Comédia -->
  <section id="comedia">
    <?php $serie_comedia = SeriesDAO::listarCategoria(3); ?>
    <h2>Séries de Comédia</h2>
    <div class="cards-container">
      <?php for ($i = 0; $i < count($serie_comedia); $i++) { ?>
        <div class="card">
          <img src="uploads/<?= $serie_comedia[$i]["imagem"] ?>" alt="<?= $serie_comedia[$i]["titulo"] ?>">
          <h3 class="card-title"><?= $serie_comedia[$i]["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie_comedia[$i]["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie_comedia[$i]["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie_comedia[$i]["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie_comedia[$i]["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie_comedia[$i]["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie_comedia[$i]['nomeclassificacao'] ?></p>
        </div>
      <?php } ?>
    </div>
  </section>

  <!-- Aventura -->
  <section id="aventura">
    <?php $serie_aventura = SeriesDAO::listarCategoria(4); ?>
    <h2>Séries de Aventura</h2>
    <div class="cards-container">
      <?php for ($i = 0; $i < count($serie_aventura); $i++) { ?>
        <div class="card">
          <img src="uploads/<?= $serie_aventura[$i]["imagem"] ?>" alt="<?= $serie_aventura[$i]["titulo"] ?>">
          <h3 class="card-title"><?= $serie_aventura[$i]["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie_aventura[$i]["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie_aventura[$i]["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie_aventura[$i]["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie_aventura[$i]["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie_aventura[$i]["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie_aventura[$i]['nomeclassificacao'] ?></p>
        </div>
      <?php } ?>
    </div>
  </section>

  <!-- Romance -->
  <section id="romance">
    <?php $serie_romance = SeriesDAO::listarCategoria(5); ?>
    <h2>Séries de Romance</h2>
    <div class="cards-container">
      <?php for ($i = 0; $i < count($serie_romance); $i++) { ?>
        <div class="card">
          <img src="uploads/<?= $serie_romance[$i]["imagem"] ?>" alt="<?= $serie_romance[$i]["titulo"] ?>">
          <h3 class="card-title"><?= $serie_romance[$i]["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie_romance[$i]["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie_romance[$i]["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie_romance[$i]["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie_romance[$i]["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie_romance[$i]["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie_romance[$i]['nomeclassificacao'] ?></p>
        </div>
      <?php } ?>
    </div>
  </section>

  <!-- Terror -->
  <section id="terror">
    <?php $serie_terror = SeriesDAO::listarCategoria(6); ?>
    <h2>Séries de Terror</h2>
    <div class="cards-container">
      <?php for ($i = 0; $i < count($serie_terror); $i++) { ?>
        <div class="card">
          <img src="uploads/<?= $serie_terror[$i]["imagem"] ?>" alt="<?= $serie_terror[$i]["titulo"] ?>">
          <h3 class="card-title"><?= $serie_terror[$i]["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie_terror[$i]["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie_terror[$i]["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie_terror[$i]["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie_terror[$i]["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie_terror[$i]["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie_terror[$i]['nomeclassificacao'] ?></p>
        </div>
      <?php } ?>
    </div>
  </section>

</main>

<footer>
  <div class="footer-container">
    <h2>FilmesFlix</h2>
    <p class="footer-copy">© 2025 FilmesFlix. Todos os direitos reservados.</p>
  </div>
</footer>
<a href="#top" id="back-to-top" title="Voltar ao topo">&#8679;</a>
</body>
</html>
