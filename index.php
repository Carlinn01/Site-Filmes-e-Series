<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>FilmesFlix</title>
    <link rel="stylesheet" href="/styles.css">
    
</head>
<body>

<header>
  <div class="container">
    <h1 class="TituloNav">FilmesFlix</h1>
    <nav>
      <a href="filmes.html">Filmes</a>
      <a href="series.html">Séries</a>
    </nav>
  </div>
</header>

<main>
    <section>
        <h2>Destaques</h2>
        <h3>Filmes:</h3>
        <div class="recomendados">
            <!--aq vai o carrosel-->
            <section class="destaques-section">
  <div class="carousel-container">
    <button class="prev-btn">&#10094;</button>
    <div class="carousel filmes-carousel">
      <div class="card">
        <img src="img/logo.png" alt="Filme 1">
        <h3>Filme 1</h3>
      </div>
      <div class="card">
        <img src="img/images.jpg" alt="Filme 2">
        <h3>Filme 2</h3>
      </div>
      <div class="card">
        <img src="img/filme3.jpg" alt="Filme 3">
        <h3>Filme 3</h3>
      </div>
      <div class="card">
        <img src="img/filme4.jpg" alt="Filme 4">
        <h3>Filme 4</h3>
      </div>
      <!-- mais cards se quiser -->
    </div>
    <button class="next-btn">&#10095;</button>
  </div>
</section>
        </div>
            <h3>Series:</h3>
        <div class="recomendados">
            <!--aq vai o carrosel-->
        </div>
    </section>
    <section>
        <h2>Lançamentos</h2>
        <ul>
            <!--Ultimos 5 filmes lançados -->
            <div class="card">
              <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <div class="container">
                  <h4><b>Teste</b></h4>
                  <p>Teste2</p>
                </div>
            </div>
        </ul>
    </section>

    <section>
        <h2>Ganhadores do Oscar</h2>
        <ul>
            <!--o titulo ja fala burro -->
        </ul>
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
  // Função para controlar o carrossel
  function setupCarousel(container) {
    const carousel = container.querySelector('.carousel');
    const prevBtn = container.querySelector('.prev-btn');
    const nextBtn = container.querySelector('.next-btn');

    const cardWidth = carousel.querySelector('.card').offsetWidth + 15; // card width + gap

    prevBtn.addEventListener('click', () => {
      carousel.scrollBy({ left: -cardWidth, behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', () => {
      carousel.scrollBy({ left: cardWidth, behavior: 'smooth' });
    });
  }

  // Inicializa todos os carrosséis da página
  document.querySelectorAll('.carousel-container').forEach(setupCarousel);
</script>
</body>
</html>
