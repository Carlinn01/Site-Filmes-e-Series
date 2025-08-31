<?php
session_start();
require_once "src/FilmesDAO.php";
require_once "src/SeriesDAO.php";



$categorias = [
  1 => "Comédia",
  2 => "Drama",
  3 => "Ação",
  4 => "Aventura",
  5 => "Romance",
  6 => "Terror"
];

$classificacoes_imagens = [
    6 => "uploads/livre.png",
    1 => "uploads/10.png",
    2 => "uploads/12.png",
    3 => "uploads/14.png",
    4 => "uploads/16.png",
     5 => "uploads/18.png"
];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>FilmesFlix</title>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<header id="top">
  <div class="container">
    <a href="/index.php" class="TituloNav"><h1>FilmesFlix</h1></a>
    <nav>
      <a href="filmes.php">Filmes</a>
      <a href="series.php">Séries</a>
      <?php if (isset($_SESSION["usuario_id"])): ?>
        <?php if ($_SESSION["usuario_tipo"] === 'admin'): ?>
          <a href="form-filmes.php">Cadastrar Filme</a>
          <a href="form-series.php">Cadastrar Série</a>
        <?php endif; ?>
        <a href="logout.php">Sair</a>
      <?php else: ?>
        <a href="login.php">Login</a>
      <?php endif; ?>
    </nav>
  </div>
</header>

<main>

  <h1>Filmes</h1>
  <?php foreach ($categorias as $id => $nome): ?>
    <section id="filme-<?= strtolower($nome) ?>">
      <h2>Filmes de <?= $nome ?></h2>
      <div class="cards-carousel-container">
        <button class="prev-btn">&#10094;</button>
        <div class="cards-container">
          <?php foreach (FilmesDAO::listarCategoria($id) as $filme): ?>
            <div class="card">
              <img src="uploads/<?= $filme["imagem"] ?>" alt="<?= $filme["titulo"] ?>">
              <div class="card-info">
                <h3><?= $filme["titulo"] ?></h3>
                <p><strong>Diretor:</strong> <?= $filme["diretor"] ?></p>
                <p><strong>Ano:</strong> <?= $filme["ano"] ?></p>
                <p><strong>Elenco:</strong> <?= $filme["elenco"] ?></p>
                <p><strong>Prêmios:</strong> <?= $filme["premios"] ?></p>
                <p>
  <strong>Classificação:</strong> <?= $filme["nomeclassificacao"] ?>
  <img src="<?= $classificacoes_imagens[$filme['idclassificacao']] ?>" alt="<?= $filme["nomeclassificacao"] ?>" style="width:30px;height:30px;margin-left:5px;">
</p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="next-btn">&#10095;</button>
      </div>
    </section>
  <?php endforeach; ?>

  <h1>Séries</h1>
<?php foreach ($categorias as $id => $nome): ?>
<section id="serie-<?= strtolower($nome) ?>">
  <h2>Séries de <?= $nome ?></h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach (SeriesDAO::listarCategoria($id) as $serie): ?>
        <div class="card">
          <img src="uploads/<?= $serie["imagem"] ?>" alt="<?= $serie["titulo"] ?>">
          <div class="card-info">
            <h3><?= $serie["titulo"] ?></h3>
            <p><strong>Diretor:</strong> <?= $serie["diretor"] ?></p>
            <p><strong>Ano:</strong> <?= $serie["ano"] ?></p>
            <p><strong>Elenco:</strong> <?= $serie["elenco"] ?></p>
            <p><strong>Temporadas:</strong> <?= $serie["temporadas"] ?></p>
            <p><strong>Episódios:</strong> <?= $serie["episodios"] ?></p>
            <p>
              <strong>Classificação:</strong> <?= $serie["nomeclassificacao"] ?>
              <img src="<?= $classificacoes_imagens[$serie['idclassificacao']] ?>" 
                   alt="<?= $serie["nomeclassificacao"] ?>" 
                   style="width:30px;height:30px;margin-left:5px;">
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>
<?php endforeach; ?>

</main>

<footer>
  <div class="footer-container">
    <h2>FilmesFlix</h2>
    <p class="footer-copy">© 2025 FilmesFlix. Todos os direitos reservados.</p>
  </div>
</footer>

<a href="#top" id="back-to-top" title="Voltar ao topo">&#11014;</a>

<script>
document.querySelectorAll('.cards-carousel-container').forEach(carousel => {
  const container = carousel.querySelector('.cards-container');
  const cardWidth = container.children[0]?.offsetWidth + 20 || 240;
  let scrollPos = 0;
  const prev = carousel.querySelector('.prev-btn');
  const next = carousel.querySelector('.next-btn');

  next.addEventListener('click', () => {
    scrollPos += cardWidth;
    if (scrollPos >= container.scrollWidth / 2) scrollPos = 0;
    container.scrollTo({ left: scrollPos, behavior: 'smooth' });
  });

  prev.addEventListener('click', () => {
    scrollPos -= cardWidth;
    if (scrollPos < 0) scrollPos = container.scrollWidth / 2 - cardWidth;
    container.scrollTo({ left: scrollPos, behavior: 'smooth' });
  });
});
</script>

</body>
</html>
