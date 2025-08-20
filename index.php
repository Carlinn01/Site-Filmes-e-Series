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
  <section class="destaques-section">
    <h2>Destaques</h2>
    <h3>Filmes:</h3>
    <div class="carousel-container">
      <button class="prev-btn">&#10094;</button>
      <div class="carousel">
        <?php for ($i = 0; $i < count($destaques_filmes); $i++) { ?>
          <div class="card">
            <img src="<?= $destaques_filmes[$i]['imagem'] ?>" alt="<?= $destaques_filmes[$i]['titulo'] ?>" />
            <h3><?= $destaques_filmes[$i]['titulo'] ?></h3>
          </div>
        <?php } ?>
      </div>
      <button class="next-btn">&#10095;</button>
    </div>

    <h3>Séries:</h3>
    <div class="carousel-container">
      <button class="prev-btn">&#10094;</button>
      <div class="carousel">
        <?php for ($i = 0; $i < count($destaques_series); $i++) { ?>
          <div class="card">
            <img src="<?= $destaques_series[$i]['imagem'] ?>" alt="<?= $destaques_series[$i]['titulo'] ?>" />
            <h3><?= $destaques_series[$i]['titulo'] ?></h3>
          </div>
        <?php } ?>
      </div>
      <button class="next-btn">&#10095;</button>
    </div>
  </section>

  <section>
    <h2>Lançamentos</h2>
    <div class="cards-container">
      <?php for ($i = 0; $i < count($lancamentos); $i++) { ?>
        <div class="card-lancamento">
          <img src="<?= $lancamentos[$i]['imagem'] ?>" alt="<?= $lancamentos[$i]['titulo'] ?>">
          <h3><?= $lancamentos[$i]['titulo'] ?></h3>
          <p><?= $lancamentos[$i]['descricao'] ?></p>
        </div>
      <?php } ?>
    </div>
  </section>

  <section>
    <h2>Filmes Vencedores do Oscar de Melhor Filme</h2>
    <div class="cards-container">
      <?php for ($i = 0; $i < count($oscar_vencedores); $i++) { ?>
        <div class="card-lancamento">
          <img src="<?= $oscar_vencedores[$i]['imagem'] ?>" alt="<?= $oscar_vencedores[$i]['titulo'] ?>" />
          <h3><?= $oscar_vencedores[$i]['titulo'] ?></h3>
          <p><?= $oscar_vencedores[$i]['descricao'] ?></p>
          <?php if (isset($oscar_vencedores[$i]['data_cerimonia'])) { ?>
            <p><?= $oscar_vencedores[$i]['data_cerimonia'] ?></p>
          <?php } ?>
          <p><?= $oscar_vencedores[$i]['sinopse'] ?></p>
        </div>
      <?php } ?>
    </div>
  </section>
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
        carousel.scrollBy({ left: -cardWidth, behavior: 'smooth' });
      }
    });

    nextBtn.addEventListener('click', () => {
      if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth) {
        carousel.scrollLeft = 0;
      } else {
        carousel.scrollBy({ left: cardWidth, behavior: 'smooth' });
      }
    });
  }

  document.querySelectorAll('.carousel-container').forEach(setupCarousel);
</script>
</body>
</html>
