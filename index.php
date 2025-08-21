<?php
require_once "src/FilmesDAO.php";
require_once "src/SeriesDAO.php";
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
    </nav>
  </div>
</header>

<main>

<h1>Filmes</h1>

<!-- Comédia -->
<section id="filme-comedia">
  <h2>Filmes de Comédia</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(FilmesDAO::listarCategoria(1) as $filme): ?>
      <div class="card">
        <img src="uploads/<?= $filme["imagem"] ?>" alt="<?= $filme["titulo"] ?>">
        <div class="card-info">
          <h3><?= $filme["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $filme["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $filme["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $filme["elenco"] ?></p>
          <p><strong>Prêmios:</strong> <?= $filme["premios"] ?></p>
          <p><strong>Classificação:</strong> <?= $filme["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<!-- Drama -->
<section id="filme-drama">
  <h2>Filmes de Drama</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(FilmesDAO::listarCategoria(2) as $filme): ?>
      <div class="card">
        <img src="uploads/<?= $filme["imagem"] ?>" alt="<?= $filme["titulo"] ?>">
        <div class="card-info">
          <h3><?= $filme["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $filme["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $filme["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $filme["elenco"] ?></p>
          <p><strong>Prêmios:</strong> <?= $filme["premios"] ?></p>
          <p><strong>Classificação:</strong> <?= $filme["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<!-- Ação -->
<section id="filme-acao">
  <h2>Filmes de Ação</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(FilmesDAO::listarCategoria(3) as $filme): ?>
      <div class="card">
        <img src="uploads/<?= $filme["imagem"] ?>" alt="<?= $filme["titulo"] ?>">
        <div class="card-info">
          <h3><?= $filme["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $filme["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $filme["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $filme["elenco"] ?></p>
          <p><strong>Prêmios:</strong> <?= $filme["premios"] ?></p>
          <p><strong>Classificação:</strong> <?= $filme["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<!-- Aventura -->
<section id="filme-aventura">
  <h2>Filmes de Aventura</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(FilmesDAO::listarCategoria(4) as $filme): ?>
      <div class="card">
        <img src="uploads/<?= $filme["imagem"] ?>" alt="<?= $filme["titulo"] ?>">
        <div class="card-info">
          <h3><?= $filme["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $filme["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $filme["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $filme["elenco"] ?></p>
          <p><strong>Prêmios:</strong> <?= $filme["premios"] ?></p>
          <p><strong>Classificação:</strong> <?= $filme["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<!-- Romance -->
<section id="filme-romance">
  <h2>Filmes de Romance</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(FilmesDAO::listarCategoria(5) as $filme): ?>
      <div class="card">
        <img src="uploads/<?= $filme["imagem"] ?>" alt="<?= $filme["titulo"] ?>">
        <div class="card-info">
          <h3><?= $filme["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $filme["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $filme["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $filme["elenco"] ?></p>
          <p><strong>Prêmios:</strong> <?= $filme["premios"] ?></p>
          <p><strong>Classificação:</strong> <?= $filme["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<!-- Terror -->
<section id="filme-terror">
  <h2>Filmes de Terror</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(FilmesDAO::listarCategoria(6) as $filme): ?>
      <div class="card">
        <img src="uploads/<?= $filme["imagem"] ?>" alt="<?= $filme["titulo"] ?>">
        <div class="card-info">
          <h3><?= $filme["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $filme["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $filme["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $filme["elenco"] ?></p>
          <p><strong>Prêmios:</strong> <?= $filme["premios"] ?></p>
          <p><strong>Classificação:</strong> <?= $filme["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<h1>Séries</h1>

<!-- Comédia -->
<section id="serie-comedia">
  <h2>Séries de Comédia</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(SeriesDAO::listarCategoria(1) as $serie): ?>
      <div class="card">
        <img src="uploads/<?= $serie["imagem"] ?>" alt="<?= $serie["titulo"] ?>">
        <div class="card-info">
          <h3><?= $serie["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<!-- Drama -->
<section id="serie-drama">
  <h2>Séries de Drama</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(SeriesDAO::listarCategoria(2) as $serie): ?>
      <div class="card">
        <img src="uploads/<?= $serie["imagem"] ?>" alt="<?= $serie["titulo"] ?>">
        <div class="card-info">
          <h3><?= $serie["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<!-- Ação -->
<section id="serie-acao">
  <h2>Séries de Ação</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(SeriesDAO::listarCategoria(3) as $serie): ?>
      <div class="card">
        <img src="uploads/<?= $serie["imagem"] ?>" alt="<?= $serie["titulo"] ?>">
        <div class="card-info">
          <h3><?= $serie["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<!-- Aventura -->
<section id="serie-aventura">
  <h2>Séries de Aventura</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(SeriesDAO::listarCategoria(4) as $serie): ?>
      <div class="card">
        <img src="uploads/<?= $serie["imagem"] ?>" alt="<?= $serie["titulo"] ?>">
        <div class="card-info">
          <h3><?= $serie["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<!-- Romance -->
<section id="serie-romance">
  <h2>Séries de Romance</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(SeriesDAO::listarCategoria(5) as $serie): ?>
      <div class="card">
        <img src="uploads/<?= $serie["imagem"] ?>" alt="<?= $serie["titulo"] ?>">
        <div class="card-info">
          <h3><?= $serie["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<!-- Terror -->
<section id="serie-terror">
  <h2>Séries de Terror</h2>
  <div class="cards-carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="cards-container">
      <?php foreach(SeriesDAO::listarCategoria(6) as $serie): ?>
      <div class="card">
        <img src="uploads/<?= $serie["imagem"] ?>" alt="<?= $serie["titulo"] ?>">
        <div class="card-info">
          <h3><?= $serie["titulo"] ?></h3>
          <p><strong>Diretor:</strong> <?= $serie["diretor"] ?></p>
          <p><strong>Ano:</strong> <?= $serie["ano"] ?></p>
          <p><strong>Elenco:</strong> <?= $serie["elenco"] ?></p>
          <p><strong>Temporadas:</strong> <?= $serie["temporadas"] ?></p>
          <p><strong>Episódios:</strong> <?= $serie["episodios"] ?></p>
          <p><strong>Classificação:</strong> <?= $serie["nomeclassificacao"] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>

<footer>
  <div class="container footer-container">
    <h2>FilmesFlix</h2>
    <p class="footer-copy">© 2025 FilmesFlix. Todos os direitos reservados.</p>
  </div>
</footer>

<a href="#top" id="back-to-top" title="Voltar ao topo">&#8679;</a>

<script>
  document.querySelectorAll('.cards-carousel-container').forEach(carousel => {
  const container = carousel.querySelector('.cards-container');
  const cards = Array.from(container.children);
  const cardWidth = cards[0].offsetWidth + 20; // largura do card + gap

  let scrollPos = 0;

  const prev = carousel.querySelector('.prev-btn');
  const next = carousel.querySelector('.next-btn');

  next.addEventListener('click', () => {
    scrollPos += cardWidth;
    if (scrollPos >= container.scrollWidth / 2) {
      scrollPos = 0; // Resetar para o início
    }
    container.scrollTo({ left: scrollPos, behavior: 'smooth' });
  });

  prev.addEventListener('click', () => {
    scrollPos -= cardWidth;
    if (scrollPos < 0) {
      scrollPos = container.scrollWidth / 2 - cardWidth; // Ajuste para o final
    }
    container.scrollTo({ left: scrollPos, behavior: 'smooth' });
  });
});

</script>


</body>
</html>
