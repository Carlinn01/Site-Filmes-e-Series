<?php
$series = [
  "Drama" => [
    [
      "titulo" => "Game of Thrones",
      "imagem" => "https://m.media-amazon.com/images/M/MV5BMTNhMDJmNmYtNDQ5OS00ODdlLWE0ZDAtZTgyYTIwNDY3OTU3XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
      "atores" => "Kit Harington, Emilia Clarke, Lena Headey",
      "diretor" => "D.B. Weiss, David Benioff",
      "classificacao" => "18+",
      "episodios" => 73,
      "temporadas" => 8
    ],
    [
      "titulo" => "Breaking Bad",
      "imagem" => "https://br.web.img3.acsta.net/pictures/14/03/31/19/28/462555.jpg",
      "atores" => "Bryan Cranston, Aaron Paul, Anna Gunn",
      "diretor" => "Vince Gilligan",
      "classificacao" => "16+",
      "episodios" => 62,
      "temporadas" => 5
    ],
    [
      "titulo" => "The Crown",
      "imagem" => "https://upload.wikimedia.org/wikipedia/pt/9/90/The-Crown-Poster-T1.jpg",
      "atores" => "Claire Foy, Olivia Colman, Imelda Staunton",
      "diretor" => "Peter Morgan",
      "classificacao" => "16+",
      "episodios" => 60,
      "temporadas" => 6
    ]
  ],
  "Ficção Científica" => [
    [
      "titulo" => "Stranger Things",
      "imagem" => "https://m.media-amazon.com/images/M/MV5BMjg2NmM0MTEtYWY2Yy00NmFlLTllNTMtMjVkZjEwMGVlNzdjXkEyXkFqcGc@._V1_.jpg",
      "atores" => "Winona Ryder, David Harbour, Millie Bobby Brown",
      "diretor" => "The Duffer Brothers",
      "classificacao" => "14+",
      "episodios" => 34,
      "temporadas" => 4
    ],
    [
      "titulo" => "Black Mirror",
      "imagem" => "https://cinema10.com.br/upload/series/series_212_pblsck.jpg",
      "atores" => "Daniel Lapaine, Michaela Coel, Bryce Dallas Howard",
      "diretor" => "Charlie Brooker",
      "classificacao" => "18+",
      "episodios" => 22,
      "temporadas" => 5
    ],
    [
      "titulo" => "Westworld",
      "imagem" => "https://upload.wikimedia.org/wikipedia/pt/4/46/Westworld_Temporada_1_Poster.jpg",
      "atores" => "Evan Rachel Wood, Jeffrey Wright, Thandie Newton",
      "diretor" => "Jonathan Nolan, Lisa Joy",
      "classificacao" => "16+",
      "episodios" => 28,
      "temporadas" => 3
    ]
  ],
  "Comédia" => [
    [
      "titulo" => "Brooklyn Nine-Nine",
      "imagem" => "https://m.media-amazon.com/images/M/MV5BNzBiODQxZTUtNjc0MC00Yzc1LThmYTMtN2YwYTU3NjgxMmI4XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg",
      "atores" => "Andy Samberg, Terry Crews, Andre Braugher",
      "diretor" => "Michael Schur",
      "classificacao" => "14+",
      "episodios" => 153,
      "temporadas" => 8
    ],
    [
      "titulo" => "The Office",
      "imagem" => "https://br.web.img3.acsta.net/pictures/14/02/04/13/20/128334.jpg",
      "atores" => "Steve Carell, Rainn Wilson, John Krasinski",
      "diretor" => "Greg Daniels",
      "classificacao" => "14+",
      "episodios" => 201,
      "temporadas" => 9
    ],
    [
      "titulo" => "Parks and Recreation",
      "imagem" => "https://m.media-amazon.com/images/M/MV5BNDlhMzAwNTAtNTk2NS00MTdkLWE3ZWYtMDU0MTFiYmU2ZTc0XkEyXkFqcGc@._V1_.jpg",
      "atores" => "Amy Poehler, Nick Offerman, Rashida Jones",
      "diretor" => "Greg Daniels",
      "classificacao" => "14+",
      "episodios" => 125,
      "temporadas" => 7
    ]
  ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>FilmesFlix - Séries</title>
  <link rel="stylesheet" href="/series.css">
</head>
<body>

<header id="top">
  <div class="container">
    <a href="/index.php" class="TituloNav">
      <h1>FilmesFlix</h1>
    </a>
    <div class="page-title">Séries</div>  <!-- Título central grande -->
    <nav>
      <a href="/filmes.php">Filmes</a>
      <a href="#drama">Drama</a>
      <a href="#ficção-científica">Ficção Científica</a>
      <a href="#comédia">Comédia</a>
    </nav>
  </div>
</header>
<main>
  <?php
    $generos = array_keys($series);
    for ($i = 0; $i < count($generos); $i++) {
      $genero = $generos[$i];
      $genero_id = strtolower(str_replace(' ', '-', $genero)); //Para a nav bar funcionar//
      $lista = $series[$genero];
  ?>
    <section id="<?= $genero_id ?>">
      <h2><?= $genero ?></h2>
      <div class="cards-container">
        <?php
          for ($j = 0; $j < count($lista); $j++) {
            $serie = $lista[$j];
        ?>
          <div class="card">
            <img src="<?= $serie['imagem'] ?>" alt="<?= $serie['titulo'] ?>" />
            <div class="card-body">
              <h3 class="card-title"><?= $serie['titulo'] ?></h3>
              <p><strong>Atores:</strong> <?= $serie['atores'] ?></p>
              <p><strong>Diretor:</strong> <?= $serie['diretor'] ?></p>
              <p><strong>Classificação:</strong> <?= $serie['classificacao'] ?></p>
              <p><strong>Episódios:</strong> <?= $serie['episodios'] ?></p>
              <p><strong>Temporadas:</strong> <?= $serie['temporadas'] ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
  <?php } ?>
</main>

<footer>
  <div class="footer-container">
    <h2>FilmesFlix</h2>
    <p class="footer-copy">© 2025 FilmesFlix. Todos os direitos reservados.</p>
  </div>
</footer>
<a href="#top" id="back-to-top" title="Voltar ao topo">&#8679;</a>
</body>
</html>
