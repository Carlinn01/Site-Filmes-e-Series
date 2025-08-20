<?php
require_once "src/FilmesDAO.php";


// Filmes por categoria
$filmes_acao      = FilmesDAO::listarCategoria(3);
$filmes_comedia   = FilmesDAO::listarCategoria(1);
$filmes_drama     = FilmesDAO::listarCategoria(2);
$filmes_romance   = FilmesDAO::listarCategoria(5);
$filmes_terror    = FilmesDAO::listarCategoria(6);
$filmes_aventura  = FilmesDAO::listarCategoria(4);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>FilmesFlix</title>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/styles.css">
</head>

<body>
  <header>
    <div class="container">
      <h1 class="TituloNav">FilmesFlix</h1>
      <nav>
        <a href="filmes.php">Filmes</a>
        <a href="series.php">Séries</a>
      </nav>
    </div>
  </header>

  <main>
    <h1>Filmes:</h1>
    <?php
    $categorias = [
      'Ação' => $filmes_acao,
      'Comédia' => $filmes_comedia,
      'Drama' => $filmes_drama,
      'Romance' => $filmes_romance,
      'Terror' => $filmes_terror,
      'Aventura' => $filmes_aventura
    ];

    foreach ($categorias as $nomeGenero => $filmes) :
      if (count($filmes) > 0) :
    ?>
        <section class="destaques-section" id="<?= strtolower($nomeGenero) ?>">
          <h3>Gênero: <?= $nomeGenero ?></h3>
          <div class="carousel-container">
            <button class="prev-btn">&#10094;</button>
            <div class="carousel">
              <?php foreach ($filmes as $filme) : ?>
                <div class="card">
                  <img src="uploads/<?= $filme['imagem'] ?>" alt="<?= $filme['titulo'] ?>">
                  <h3 class="card-title"><?= $filme['titulo'] ?></h3>
                  <p><strong>Diretor:</strong> <?= $filme['diretor'] ?></p>
                  <p><strong>Ano:</strong> <?= $filme['ano'] ?></p>
                  <p><strong>Elenco:</strong> <?= $filme['elenco'] ?></p>
                  <p><strong>Prêmios:</strong> <?= $filme['premios'] ?></p>
                  <p><strong>Classificação:</strong> <?= $filme['nomeclassificacao'] ?></p>
                </div>
              <?php endforeach; ?>
            </div>
            <button class="next-btn">&#10095;</button>
          </div>
        </section>
    <?php
      endif;
    endforeach;
    ?>


    <!-- Séries -->

  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-logo">
        <h2>FilmesFlix</h2>
      </div>
      <p class="footer-copy">© 2025 FilmesFlix. Todos os direitos reservados.</p>
    </div>
  </footer>

  <script>
    function setupCarousel(container) {
      const carousel = container.querySelector('.carousel');
      const prevBtn = container.querySelector('.prev-btn');
      const nextBtn = container.querySelector('.next-btn');
      const cardWidth = carousel.querySelector('.card').offsetWidth + 15;

      prevBtn.addEventListener('click', () => {
        if (carousel.scrollLeft === 0) {
          carousel.scrollLeft = carousel.scrollWidth - carousel.clientWidth;
        } else {
          carousel.scrollBy({
            left: -cardWidth,
            behavior: 'smooth'
          });
        }
      });

      nextBtn.addEventListener('click', () => {
        if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth) {
          carousel.scrollLeft = 0;
        } else {
          carousel.scrollBy({
            left: cardWidth,
            behavior: 'smooth'
          });
        }
      });
    }

    document.querySelectorAll('.carousel-container').forEach(setupCarousel);
  </script>
</body>

</html>