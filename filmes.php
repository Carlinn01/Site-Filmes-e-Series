<?php
require_once "src/FilmesDAO.php";
?>
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
            <?php
       $filmes_comedia   = FilmesDAO::listarCategoria(1);
        $filmes_drama     = FilmesDAO::listarCategoria(2);
        $filmes_acao      = FilmesDAO::listarCategoria(3);
        $filmes_aventura  = FilmesDAO::listarCategoria(4);
        $filmes_romance   = FilmesDAO::listarCategoria(5);
        $filmes_terror    = FilmesDAO::listarCategoria(6);

        ?>
            <ul class="d-flex gap-4" style=" list-style-type: none">
                <li><a class="nav-link" href="#acao">Ação</a></li>
                <li><a class="nav-link" href="#drama">Drama</a></li>
                <li><a class="nav-link" href="#terror">Terror</a></li>
                <li><a class="nav-link" href="#comedia">Comédia</a></li>
                <li><a class="nav-link" href="#romance">romance</a></li>
            </ul>

        
        </section>
        
        <section class="destaques-section" id="acao">
            <h3>Gênero: Ação</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_acao); $i++) { ?>
                        <div class="card">
                            <img src="uploads/<?= $filmes_acao[$i]['imagem'] ?>" alt="<?= $filmes_acao[$i]['titulo'] ?>" />
                            <h3><?= $filmes_acao[$i]['titulo'] ?></h3>
                            <h6 class="sub">elenco: <?= $filmes_acao[$i]['elenco'] ?>
                                <br><br>
                                Diretor: <?= $filmes_acao[$i]['diretor'] ?>
                                <br><br>
                                Classificação: <?= $filmes_acao[$i]['idclassificacao'] ?>
                            </h6>
                        </div>
                    <?php } ?>
                </div>
                <button class="next-btn">&#10095;</button>
            </div>
        </section>

        <section class="destaques-section" id="drama">
            <h3>Gênero: drama</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_drama); $i++) { ?>
                        <div class="card">
                            <img src="uploads/<?= $filmes_drama[$i]['imagem'] ?>" alt="<?= $filmes_drama[$i]['titulo'] ?>" />
                            <h3><?= $filmes_drama[$i]['titulo'] ?></h3>
                            <h6 class="sub">elenco: <?= $filmes_drama[$i]['elenco'] ?>
                                <br><br>
                                Diretor: <?= $filmes_drama[$i]['diretor'] ?>
                                <br><br>
                                Classificação: <?= $filmes_drama[$i]['idclassificacao'] ?>
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
                            <img src="uploads/<?= $filmes_terror[$i]['imagem'] ?>" alt="<?= $filmes_terror[$i]['titulo'] ?>" />
                            <h3><?= $filmes_terror[$i]['titulo'] ?></h3>
                            <h6 class="sub">elenco: <?= $filmes_terror[$i]['elenco'] ?>
                                <br><br>
                                Diretor: <?= $filmes_terror[$i]['diretor'] ?>
                                <br><br>
                                Classificação: <?= $filmes_terror[$i]['idclassificacao'] ?>
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
                            <img src="uploads/<?= $filmes_comedia[$i]['imagem'] ?>" alt="<?= $filmes_comedia[$i]['titulo'] ?>" />
                            <h3><?= $filmes_comedia[$i]['titulo'] ?></h3>
                            <h6 class="sub">elenco: <?= $filmes_comedia[$i]['elenco'] ?>
                                <br><br>
                                Diretor: <?= $filmes_comedia[$i]['diretor'] ?>
                                <br><br>
                                Classificação: <?= $filmes_comedia[$i]['idclassificacao'] ?>
                            </h6>
                        </div>
                    <?php } ?>
                </div>
                <button class="next-btn">&#10095;</button>
            </div>
        </section>

        <section class="destaques-section" id="romance">
            <h3>Gênero: romance</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_romance); $i++) { ?>
                        <div class="card">
                            <img src="uploads/<?= $filmes_romance[$i]['imagem'] ?>" alt="<?= $filmes_romance[$i]['titulo'] ?>" />
                            <h3><?= $filmes_romance[$i]['titulo'] ?></h3>
                            <h6 class="sub">elenco: <?= $filmes_romance[$i]['elenco'] ?>
                                <br><br>
                                Diretor: <?= $filmes_romance[$i]['diretor'] ?>
                                <br><br>
                                Classificação: <?= $filmes_romance[$i]['idclassificacao'] ?>
                            </h6>
                        </div>
                    <?php } ?>
                </div>
                <button class="next-btn">&#10095;</button>
            </div>
        </section>

        <!-- <section>
            <h2>Filmes Vencedores do Oscar de Melhor Filme</h2>
            <div class="cards-container">
                <?php for ($i = 0; $i < count($oscar_vencedores); $i++) { ?>
                    <div class="card-lancamento">
                        <img src="uploads/<?= $oscar_vencedores[$i]['imagem'] ?>" alt="<?= $oscar_vencedores[$i]['titulo'] ?>" />
                        <h3><?= $oscar_vencedores[$i]['titulo'] ?></h3>
                        <p><?= $oscar_vencedores[$i]['descricao'] ?></p>
                        <?php if (isset($oscar_vencedores[$i]['data_cerimonia'])) { ?>
                            <p><?= $oscar_vencedores[$i]['data_cerimonia'] ?></p>
                        <?php } ?>
                        <p><?= $oscar_vencedores[$i]['sinopse'] ?></p>
                    </div>
                <?php } ?>
            </div>
        </section> -->
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
