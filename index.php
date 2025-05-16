<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>FilmesFlix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
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
            <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/Final Destination.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
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
  <div class="cards-container">
    <div class="card">
      <img src="/img/Premonição6.jpg" alt="Filme 1">
      <h3>Premonição 6: Laços de Sangue</h3>
      <p>Estreia em 15 de maio de 2025. </p>
    </div>
    <div class="card">
      <img src="/img/Manas.jpg" alt="Filme 2">
      <h3>Manas<br><br></h3>
      <p>Estreia em 15 de maio de 2025.</p>
    </div>
    <div class="card">
      <img src="/img/Final Destination.jpg" alt="Filme 3">
      <h3>Final Destination: Bloodlines</h3>
      <p>Estreia em 15 de maio de 2025.</p>
    </div>
    <div class="card">
      <img src="/img/Homem com H.jpg" alt="Filme 4">
      <h3>Homem com H<br><br></h3>
      <p>Estreia em 1º de maio de 2025.</p>
    </div>
    <div class="card">
      <img src="/img/Os enforncados.jpg" alt="Filme 5">
      <h3>Os Enforcados<br><br></h3>
      <p>Estreia em 8 de maio de 2025.</p>
    </div>
  </div>
</section>

    <section>
        <h2>Ganhadores do Oscar</h2>
        <div class="cards-container">
    <div class="card">
      <img src="/img/Premonição6.jpg" alt="Filme 1">
      <h3>Premonição 6: Laços de Sangue</h3>
      <p>Estreia em 15 de maio de 2025. </p>
    </div>
    <div class="card">
      <img src="/img/Manas.jpg" alt="Filme 2">
      <h3>Manas<br><br></h3>
      <p>Estreia em 15 de maio de 2025.</p>
    </div>
    <div class="card">
      <img src="/img/Final Destination.jpg" alt="Filme 3">
      <h3>Final Destination: Bloodlines</h3>
      <p>Estreia em 15 de maio de 2025.</p>
    </div>
    <div class="card">
      <img src="/img/Homem com H.jpg" alt="Filme 4">
      <h3>Homem com H<br><br></h3>
      <p>Estreia em 1º de maio de 2025.</p>
    </div>
    <div class="card">
      <img src="/img/Os enforncados.jpg" alt="Filme 5">
      <h3>Os Enforcados<br><br></h3>
      <p>Estreia em 8 de maio de 2025.</p>
    </div>
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
