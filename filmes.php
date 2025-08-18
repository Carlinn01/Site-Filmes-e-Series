<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>FilmesFlix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoNqO4iPY1E/6zC8jb7mY5o5r5LvTr9IYpSFi1eq5B6p5E1"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="filmes.css">
</head>
<body>
    <header>
        <div class="container">
            <a href="/index.php" class="TituloNav">
            <h1>FilmesFlix</h1>
            </a>
            <div class="page-title">Filmes</div>
            <nav>
                <a href="series.php">Séries</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="filtro-generos">
            <ul class="d-flex gap-4" style=" list-style-type: none">
                <li><a class="nav-link" href="#acao">Ação</a></li>
                <li><a class="nav-link" href="#fantasia">Fantasia</a></li>
                <li><a class="nav-link" href="#terror">Terror</a></li>
                <li><a class="nav-link" href="#comedia">Comédia</a></li>
                <li><a class="nav-link" href="#suspense">Suspense</a></li>
            </ul>
        </section>
        
        <section class="destaques-section" id="acao">
            <h3>Gênero: Ação</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_acao); $i++) { ?>
                        <div class="card">
                            <img src="<?= $filmes_acao[$i]['imagem'] ?>" alt="<?= $filmes_acao[$i]['titulo'] ?>" />
                            <h3><?= $filmes_acao[$i]['titulo'] ?></h3>
                            <h6 class="sub">Atores: <?= $filmes_acao[$i]['atores'] ?>
                                <br><br>
                                Diretor: <?= $filmes_acao[$i]['diretor'] ?>
                                <br><br>
                                Classificação: <?= $filmes_acao[$i]['classificacao'] ?>
                            </h6>
                        </div>
                    <?php } ?>
                </div>
                <button class="next-btn">&#10095;</button>
            </div>
        </section>

        <section class="destaques-section" id="fantasia">
            <h3>Gênero: Fantasia</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_fantasia); $i++) { ?>
                        <div class="card">
                            <img src="<?= $filmes_fantasia[$i]['imagem'] ?>" alt="<?= $filmes_fantasia[$i]['titulo'] ?>" />
                            <h3><?= $filmes_fantasia[$i]['titulo'] ?></h3>
                            <h6 class="sub">Atores: <?= $filmes_fantasia[$i]['atores'] ?>
                                <br><br>
                                Diretor: <?= $filmes_fantasia[$i]['diretor'] ?>
                                <br><br>
                                Classificação: <?= $filmes_fantasia[$i]['classificacao'] ?>
                            </h6>
                        </div>
                    <?php } ?>
                </div>
                <button class="next-btn">&#10095;</button>
            </div>
        </section>

        <section class="destaques-section" id="terror">
            <h3>Gênero: Terror</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_terror); $i++) { ?>
                        <div class="card">
                            <img src="<?= $filmes_terror[$i]['imagem'] ?>" alt="<?= $filmes_terror[$i]['titulo'] ?>" />
                            <h3><?= $filmes_terror[$i]['titulo'] ?></h3>
                            <h6 class="sub">Atores: <?= $filmes_terror[$i]['atores'] ?>
                                <br><br>
                                Diretor: <?= $filmes_terror[$i]['diretor'] ?>
                                <br><br>
                                Classificação: <?= $filmes_terror[$i]['classificacao'] ?>
                            </h6>
                        </div>
                    <?php } ?>
                </div>
                <button class="next-btn">&#10095;</button>
            </div>
        </section>

        <section class="destaques-section" id="comedia">
            <h3>Gênero: Comédia</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_comedia); $i++) { ?>
                        <div class="card">
                            <img src="<?= $filmes_comedia[$i]['imagem'] ?>" alt="<?= $filmes_comedia[$i]['titulo'] ?>" />
                            <h3><?= $filmes_comedia[$i]['titulo'] ?></h3>
                            <h6 class="sub">Atores: <?= $filmes_comedia[$i]['atores'] ?>
                                <br><br>
                                Diretor: <?= $filmes_comedia[$i]['diretor'] ?>
                                <br><br>
                                Classificação: <?= $filmes_comedia[$i]['classificacao'] ?>
                            </h6>
                        </div>
                    <?php } ?>
                </div>
                <button class="next-btn">&#10095;</button>
            </div>
        </section>

        <section class="destaques-section" id="suspense">
            <h3>Gênero: Suspense</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_suspense); $i++) { ?>
                        <div class="card">
                            <img src="<?= $filmes_suspense[$i]['imagem'] ?>" alt="<?= $filmes_suspense[$i]['titulo'] ?>" />
                            <h3><?= $filmes_suspense[$i]['titulo'] ?></h3>
                            <h6 class="sub">Atores: <?= $filmes_suspense[$i]['atores'] ?>
                                <br><br>
                                Diretor: <?= $filmes_suspense[$i]['diretor'] ?>
                                <br><br>
                                Classificação: <?= $filmes_suspense[$i]['classificacao'] ?>
                            </h6>
                        </div>
                    <?php } ?>
                </div>
                <button class="next-btn">&#10095;</button>
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
