<?php
require_once "src/FilmesDAO.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>FilmesFlix</title>
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
                <a href="filmess.php">Séries</a>
            </nav>
        </div>
    </header>
    <main>

        <?php
        $filmes_acao   = FilmesDAO::listarCategoria(1);
        $filmes_drama     = FilmesDAO::listarCategoria(2);
        $filmes_terror     = FilmesDAO::listarCategoria(3);
        $filmes_comedia = FilmesDAO::listarCategoria(4);
        $filmes_romance   = FilmesDAO::listarCategoria(5);
        $filmes_aventura   = FilmesDAO::listarCategoria(6);

        ?>

        <section class="destaques-section" id="acao">
            <h3>Gênero: Ação</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_acao); $i++) { ?>
                        <div class="card">
                            <img src="uploads/<?= $filmes_acao[$i]["imagem"] ?>" alt="<?= $filmes_acao[$i]["titulo"] ?>">
                            <h3 class="card-title"><?= $filmes_acao[$i]["titulo"] ?></h3>
                            <p><strong>Diretor:</strong> <?= $filmes_acao[$i]["diretor"] ?></p>
                            <p><strong>Ano:</strong> <?= $filmes_acao[$i]["ano"] ?></p>
                            <p><strong>Elenco:</strong> <?= $filmes_acao[$i]["elenco"] ?></p>
                            <p><strong>Premios:</strong> <?= $filmes_acao[$i]["premios"] ?></p>
                            <p><strong>Classificação:</strong> <?= $filmes_acao[$i]['nomeclassificacao'] ?></p>
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
                            <img src="uploads/<?= $filmes_drama[$i]["imagem"] ?>" alt="<?= $filmes_drama[$i]["titulo"] ?>">
                            <h3 class="card-title"><?= $filmes_drama[$i]["titulo"] ?></h3>
                            <p><strong>Diretor:</strong> <?= $filmes_drama[$i]["diretor"] ?></p>
                            <p><strong>Ano:</strong> <?= $filmes_drama[$i]["ano"] ?></p>
                            <p><strong>Elenco:</strong> <?= $filmes_drama[$i]["elenco"] ?></p>
                            <p><strong>Premios:</strong> <?= $filmes_drama[$i]["premios"] ?></p>
                            <p><strong>Classificação:</strong> <?= $filmes_drama[$i]['nomeclassificacao'] ?></p>
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
                            <img src="uploads/<?= $filmes_terror[$i]["imagem"] ?>" alt="<?= $filmes_terror[$i]["titulo"] ?>">
                            <h3 class="card-title"><?= $filmes_terror[$i]["titulo"] ?></h3>
                            <p><strong>Diretor:</strong> <?= $filmes_terror[$i]["diretor"] ?></p>
                            <p><strong>Ano:</strong> <?= $filmes_terror[$i]["ano"] ?></p>
                            <p><strong>Elenco:</strong> <?= $filmes_terror[$i]["elenco"] ?></p>
                            <p><strong>Premios:</strong> <?= $filmes_terror[$i]["premios"] ?></p>
                            <p><strong>Classificação:</strong> <?= $filmes_terror[$i]['nomeclassificacao'] ?></p>
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
                            <img src="uploads/<?= $filmes_comedia[$i]["imagem"] ?>" alt="<?= $filmes_comedia[$i]["titulo"] ?>">
                            <h3 class="card-title"><?= $filmes_comedia[$i]["titulo"] ?></h3>
                            <p><strong>Diretor:</strong> <?= $filmes_comedia[$i]["diretor"] ?></p>
                            <p><strong>Ano:</strong> <?= $filmes_comedia[$i]["ano"] ?></p>
                            <p><strong>Elenco:</strong> <?= $filmes_comedia[$i]["elenco"] ?></p>
                            <p><strong>Premios:</strong> <?= $filmes_comedia[$i]["premios"] ?></p>
                            <p><strong>Classificação:</strong> <?= $filmes_comedia[$i]['nomeclassificacao'] ?></p>
                        </div>
                    <?php } ?>
                </div>
                <button class="next-btn">&#10095;</button>
            </div>
        </section>

        <section class="destaques-section" id="romance">
            <h3>Gênero: Romance</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_romance); $i++) { ?>
                        <div class="card">
                            <img src="uploads/<?= $filmes_romance[$i]['imagem'] ?>" alt="<?= $filmes_romance[$i]['titulo'] ?>" />
                            <h3 class="card-title"><?= $filmes_romance[$i]['titulo'] ?></h3>
                            <p><strong>Diretor:</strong> <?= $filmes_romance[$i]["diretor"] ?></p>
                            <p><strong>Ano:</strong> <?= $filmes_romance[$i]["ano"] ?></p>
                            <p><strong>Elenco:</strong> <?= $filmes_romance[$i]['elenco'] ?></p>
                            <p><strong>Diretor:</strong> <?= $filmes_romance[$i]['diretor'] ?></p>
                            <p><strong>Classificação:</strong> <?= $filmes_romance[$i]['nomeclassificacao'] ?></p>
                        </div>
                    <?php } ?>
                </div>
                <button class="next-btn">&#10095;</button>
            </div>
        </section>

        <section class="destaques-section" id="aventura">
            <h3>Gênero: Aventura</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">
                    <?php for ($i = 0; $i < count($filmes_aventura); $i++) { ?>
                        <div class="card">
                            <img src="uploads/<?= $filmes_aventura[$i]['imagem'] ?>" alt="<?= $filmes_aventura[$i]['titulo'] ?>" />
                            <h3 class="card-title"><?= $filmes_aventura[$i]['titulo'] ?></h3>
                            <p><strong>Diretor:</strong> <?= $filmes_aventura[$i]["diretor"] ?></p>
                            <p><strong>Ano:</strong> <?= $filmes_aventura[$i]["ano"] ?></p>
                            <p><strong>Elenco:</strong> <?= $filmes_aventura[$i]['elenco'] ?></p>
                            <p><strong>Diretor:</strong> <?= $filmes_aventura[$i]['diretor'] ?></p>
                            <p><strong>Classificação:</strong> <?= $filmes_aventura[$i]['idclassificacao'] ?></p>
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