<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>FilmesFlix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoNqO4iPY1E/6zC8jb7mY5o5r5LvTr9IYpSFi1eq5B6p5E1" crossorigin="anonymous"></script>

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
    <section class="destaques-section">
      <h2>Destaques</h2>
      <h3>Filmes:</h3>
      <div class="carousel-container">
        <button class="prev-btn">&#10094;</button>
        <div class="carousel">
          <div class="card">
            <img src="/img/Premonição6.jpg" alt="Premonição 6" />
            <h3>Premonição 6: Laços de Sangue</h3>
          </div>
          <div class="card">
            <img src="/img/Manas.jpg" alt="Manas" />
            <h3>Manas</h3>
          </div>
          <div class="card">
            <img src="/img/Final Destination.jpg" alt="Final Destination: Bloodlines" />
            <h3>Final Destination: Bloodlines</h3>
          </div>
          <div class="card">
            <img src="/img/Homem com H.jpg" alt="Homem com H" />
            <h3>Homem com H</h3>
          </div>
          <div class="card">
            <img src="/img/Os enforncados.jpg" alt="Os Enforcados" />
            <h3>Os Enforcados</h3>
          </div>
        </div>
        <button class="next-btn">&#10095;</button>
      </div>
      <h3>Series:</h3>
      <div class="carousel-container">
        <button class="prev-btn">&#10094;</button>
        <div class="carousel">
          <div class="card">
            <img src="/img/Premonição6.jpg" alt="Premonição 6" />
            <h3>Premonição 6: Laços de Sangue</h3>
          </div>
          <div class="card">
            <img src="/img/Manas.jpg" alt="Manas" />
            <h3>Manas</h3>
          </div>
          <div class="card">
            <img src="/img/Final Destination.jpg" alt="Final Destination: Bloodlines" />
            <h3>Final Destination: Bloodlines</h3>
          </div>
          <div class="card">
            <img src="/img/Homem com H.jpg" alt="Homem com H" />
            <h3>Homem com H</h3>
          </div>
          <div class="card">
            <img src="/img/Os enforncados.jpg" alt="Os Enforcados" />
            <h3>Os Enforcados</h3>
          </div>
        </div>
        <button class="next-btn">&#10095;</button>
      </div>
    </section>

    <section>
      <h2>Lançamentos</h2>
      <div class="cards-container">
        <div class="card-lancamento">
          <img src="/img/Premonição6.jpg" alt="Filme 1">
          <h3>Premonição 6: Laços de Sangue</h3>
          <p>Estreia em 15 de maio de 2025. </p>
        </div>
        <div class="card-lancamento">
          <img src="/img/Manas.jpg" alt="Filme 2">
          <h3>Manas<br><br></h3>
          <p>Estreia em 15 de maio de 2025.</p>
        </div>
        <div class="card-lancamento">
          <img src="/img/Final Destination.jpg" alt="Filme 3">
          <h3>Final Destination: Bloodlines</h3>
          <p>Estreia em 15 de maio de 2025.</p>
        </div>
        <div class="card-lancamento">
          <img src="/img/Homem com H.jpg" alt="Filme 4">
          <h3>Homem com H<br><br></h3>
          <p>Estreia em 1º de maio de 2025.</p>
        </div>
        <div class="card-lancamento">
          <img src="/img/Os enforncados.jpg" alt="Filme 5">
          <h3>Os Enforcados<br><br></h3>
          <p>Estreia em 8 de maio de 2025.</p>
        </div>
      </div>
    </section>

    <section>
      <h2>Ganhadores do Oscar</h2>
      <div class="cards-container">
        <div class="card-lancamento">
          <img src="/img/Premonição6.jpg" alt="Filme 1">
          <h3>Premonição 6: Laços de Sangue</h3>
          <p>Estreia em 15 de maio de 2025. </p>
        </div>
        <div class="card-lancamento">
          <img src="/img/Manas.jpg" alt="Filme 2">
          <h3>Manas<br><br></h3>
          <p>Estreia em 15 de maio de 2025.</p>
        </div>
        <div class="card-lancamento">
          <img src="/img/Final Destination.jpg" alt="Filme 3">
          <h3>Final Destination: Bloodlines</h3>
          <p>Estreia em 15 de maio de 2025.</p>
        </div>
        <div class="card-lancamento">
          <img src="/img/Homem com H.jpg" alt="Filme 4">
          <h3>Homem com H<br><br></h3>
          <p>Estreia em 1º de maio de 2025.</p>
        </div>
        <div class="card-lancamento">
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
  function setupCarousel(container) {
    const carousel = container.querySelector('.carousel');
    const prevBtn = container.querySelector('.prev-btn');
    const nextBtn = container.querySelector('.next-btn');

    const cardWidth = carousel.querySelector('.card').offsetWidth + 15; // largura do card + gap

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
