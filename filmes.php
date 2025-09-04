<?php
session_start();
require_once "src/FilmesDAO.php";

$classificacoes_imagens = [
    6 => "uploads/livre.png",
    1 => "uploads/10.png",
    2 => "uploads/12.png",
    3 => "uploads/14.png",
    4 => "uploads/16.png",
    5 => "uploads/18.png"
];

// Pega usuário logado, se existir
$usuario = null;
if (isset($_SESSION['usuario_id'])) {
    $usuario = [
        'id'   => $_SESSION['usuario_id'],
        'nome' => $_SESSION['usuario_nome'],
        'tipo' => $_SESSION['usuario_tipo']
    ];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>FilmesFlix</title>
    <link rel="stylesheet" href="filmes.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <a href="index.php" class="TituloNav">
            <h1>FilmesFlix</h1>
        </a>

        <div class="page-title">Filmes</div>

        <nav>
            <a href="series.php">Séries</a>

            <?php if (isset($_SESSION["usuario_id"])): ?>
        <div class="dropdown">
            <?php
            $nomes = explode(" ", $_SESSION["usuario_nome"]);
            $nome_exibicao = $nomes[0] . (isset($nomes[1]) ? " " . $nomes[1] : "");
            ?>
            <button class="dropbtn">
                <?= $nome_exibicao ?> (<?= $_SESSION["usuario_tipo"] ?>) &#9662;
            </button>
            <div class="dropdown-content">
                <?php if ($_SESSION["usuario_tipo"] === 'admin'): ?>
                    <a href="form-filmes.php">Cadastrar Filme</a>
                    <a href="form-series.php">Cadastrar Série</a>
                <?php endif; ?>
                <a href="logout.php">Sair</a>
            </div>
        </div>
    <?php else: ?>
        <a href="login.php" class="login-link">Entrar</a>
    <?php endif; ?>
        </nav>
    </div>
</header>

<main>

    <?php
    $filmes_comedia   = FilmesDAO::listarCategoria(1);
    $filmes_drama     = FilmesDAO::listarCategoria(2);
    $filmes_acao      = FilmesDAO::listarCategoria(3);
    $filmes_aventura  = FilmesDAO::listarCategoria(4);
    $filmes_romance   = FilmesDAO::listarCategoria(5);
    $filmes_terror    = FilmesDAO::listarCategoria(6);
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
                        <p><strong>Prêmios:</strong> <?= $filmes_acao[$i]["premios"] ?></p>
                        <p>
                            <img src="<?= $classificacoes_imagens[$filmes_acao[$i]['idclassificacao']] ?>"
                                 alt="<?= $filmes_acao[$i]['nomeclassificacao'] ?>"
                                 style="width:30px; height:30px; margin-left:5px;">
                        </p>
                    </div>
                <?php } ?>
            </div>
            <button class="next-btn">&#10095;</button>
        </div>
    </section>

    <section class="destaques-section" id="drama">
        <h3>Gênero: Drama</h3>
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
                        <p><strong>Prêmios:</strong> <?= $filmes_drama[$i]["premios"] ?></p>
                        <p>
                            <img src="<?= $classificacoes_imagens[$filmes_drama[$i]['idclassificacao']] ?>"
                                 alt="<?= $filmes_drama[$i]['nomeclassificacao'] ?>"
                                 style="width:30px; height:30px; margin-left:5px;">
                        </p>
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
                        <p><strong>Prêmios:</strong> <?= $filmes_terror[$i]["premios"] ?></p>
                        <p>
                            <img src="<?= $classificacoes_imagens[$filmes_terror[$i]['idclassificacao']] ?>"
                                 alt="<?= $filmes_terror[$i]['nomeclassificacao'] ?>"
                                 style="width:30px; height:30px; margin-left:5px;">
                        </p>
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
                        <p><strong>Prêmios:</strong> <?= $filmes_comedia[$i]["premios"] ?></p>
                        <p>
                            <img src="<?= $classificacoes_imagens[$filmes_comedia[$i]['idclassificacao']] ?>"
                                 alt="<?= $filmes_comedia[$i]['nomeclassificacao'] ?>"
                                 style="width:30px; height:30px; margin-left:5px;">
                        </p>
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
                        <img src="uploads/<?= $filmes_romance[$i]["imagem"] ?>" alt="<?= $filmes_romance[$i]["titulo"] ?>">
                        <h3 class="card-title"><?= $filmes_romance[$i]["titulo"] ?></h3>
                        <p><strong>Diretor:</strong> <?= $filmes_romance[$i]["diretor"] ?></p>
                        <p><strong>Ano:</strong> <?= $filmes_romance[$i]["ano"] ?></p>
                        <p><strong>Elenco:</strong> <?= $filmes_romance[$i]["elenco"] ?></p>
                        <p><strong>Prêmios:</strong> <?= $filmes_romance[$i]["premios"] ?></p>
                        <p>
                            <img src="<?= $classificacoes_imagens[$filmes_romance[$i]['idclassificacao']] ?>"
                                 alt="<?= $filmes_romance[$i]['nomeclassificacao'] ?>"
                                 style="width:30px; height:30px; margin-left:5px;">
                        </p>
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
                        <img src="uploads/<?= $filmes_aventura[$i]["imagem"] ?>" alt="<?= $filmes_aventura[$i]["titulo"] ?>">
                        <h3 class="card-title"><?= $filmes_aventura[$i]["titulo"] ?></h3>
                        <p><strong>Diretor:</strong> <?= $filmes_aventura[$i]["diretor"] ?></p>
                        <p><strong>Ano:</strong> <?= $filmes_aventura[$i]["ano"] ?></p>
                        <p><strong>Elenco:</strong> <?= $filmes_aventura[$i]["elenco"] ?></p>
                        <p><strong>Prêmios:</strong> <?= $filmes_aventura[$i]["premios"] ?></p>
                        <p>
                            <img src="<?= $classificacoes_imagens[$filmes_aventura[$i]['idclassificacao']] ?>"
                                 alt="<?= $filmes_aventura[$i]['nomeclassificacao'] ?>"
                                 style="width:30px; height:30px; margin-left:5px;">
                        </p>
                    </div>
                <?php } ?>
            </div>
            <button class="next-btn">&#10095;</button>
        </div>
    </section>

</main>

<script src="filmes.js"></script>
</body>
</html>
