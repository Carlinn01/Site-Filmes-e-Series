<?php
//Feito com php aprendido em aula
// Vantagens:Menos linhas de código
//Desvantagens encontradas: A nav bar não estava funcionando, achamos uma solução que era setar o espaço em branco do id por "-"
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
    ],
    [
      "titulo" => "The Handmaid's Tale",
      "imagem" => "https://pop.proddigital.com.br/wp-content/uploads/sites/8/2025/02/the-handmaids-tale-season-6-teaser-poster-819x1024.jpg",
      "atores" => "Elisabeth Moss, Joseph Fiennes, Yvonne Strahovski",
      "diretor" => "Bruce Miller",
      "classificacao" => "16+",
      "episodios" => 46,
      "temporadas" => 4
    ],
    [
      "titulo" => "This Is Us",
      "imagem" => "https://br.web.img3.acsta.net/pictures/17/09/27/19/21/2415587.jpg",
      "atores" => "Milo Ventimiglia, Mandy Moore, Sterling K. Brown",
      "diretor" => "Dan Fogelman",
      "classificacao" => "12+",
      "episodios" => 105,
      "temporadas" => 6
    ],
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
    ],
    [
      "titulo" => "3% (Três Por Cento)",
      "imagem" => "https://cinema10.com.br/upload/series/series_862_593228e6b5.jpg",
      "atores" => "João Miguel, Bianca Comparato, Vaneza Oliveira",
      "diretor" => "César Charlone, Dani Sussman",
      "classificacao" => "16+",
      "episodios" => 28,
      "temporadas" => 4
    ],
    [
      "titulo" => "O Mecanismo",
      "imagem" => "data:image/jpeg;base64,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",
      "atores" => "Selton Mello, Carol Abras, Enrique Diaz",
      "diretor" => "José Padilha",
      "classificacao" => "16+",
      "episodios" => 14,
      "temporadas" => 2
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
    ],
    [
      "titulo" => "Sai de Baixo",
      "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTd2oEhLgZFxlamQoJ5scmLb8EmGeevdTT97Q&s",
      "atores" => "Miguel Falabella, Aracy Balabanian, Luis Gustavo",
      "diretor" => "Miguel Falabella, Rogério Gomes",
      "classificacao" => "12+",
      "episodios" => 364,
      "temporadas" => 9
    ],
    [
      "titulo" => "A Grande Família",
      "imagem" => "https://m.media-amazon.com/images/M/MV5BZDAzMzU4NWMtNGI1My00NjZlLTlhOTctZjljN2MzNGFiYzZjXkEyXkFqcGc@._V1_.jpg",
      "atores" => "Marco Nanini, Marieta Severo, Lúcia Veríssimo",
      "diretor" => "Maurício Farias",
      "classificacao" => "12+",
      "episodios" => 485,
      "temporadas" => 14
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
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
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
