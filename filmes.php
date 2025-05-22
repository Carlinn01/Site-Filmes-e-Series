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
            <div class="page-title">Filmes</div>  <!-- Título central grande -->
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
            <h3 id="#acao">Gênero: Ação</h3>
            <div class="carousel-container">
                <button class="prev-btn">&#10094;</button>
                <div class="carousel">

                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvSa3vJqF5aaj4q2J50fnjQ9v4A6Zkbhr2sg&s"
                            alt="" />
                        <h3>Top Gun: Maverick </h3>
                        <h6 class="sub">Atores: Tom Cruise,<br> Miles Teller,<br> Jennifer Connelly
                            <br><br>
                            Diretor: Joseph Kosinski
                            <br><br>
                            Classificação: 14+
                        </h6>
                    </div>

                    <div class="card">
                        <img src="https://br.web.img2.acsta.net/pictures/23/05/16/22/53/0156803.jpg" alt="" />
                        <h3>Velozes & Furiosos 10 </h3>
                        <h6 class="sub">Atores: Vin Diesel,<br> Jason Momoa,<br> Michelle Rodriguez
                            <br><br>
                            Diretor: Louis Leterrier
                            <br><br>
                            Classificação: 14+
                        </h6>
                    </div>

                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/pt/7/71/Extraction_2.jpg" alt="" />
                        <h3>Resgate 2</h3>
                        <h6 class="sub">
                            Atores: Chris Hemsworth,<br> Golshifteh Farahani
                            <br><br>
                            Diretor: Sam Hargrave
                            <br><br>
                            Classificação: 16+
                        </h6>
                    </div>

                    <div class="card">
                        <img src="https://musicart.xboxlive.com/7/eea21900-0000-0000-0000-000000000002/504/image.jpg"
                            alt="" />
                        <h3> Mad Max: <br>Estrada da Fúria</h3>
                        <h6 class="sub">Atores: Tom Hardy,<br> Charlize Theron
                            <br><br>
                            Diretor: George Miller
                            <br><br>
                            Classificação indicativa: 16+
                        </h6>
                    </div>

                    <div class="card">
                        <img src="data:image/jpeg;base64,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" alt="JW" />
                        <h3>John Wick 4: Baba Yaga</h3>
                        <h6 class="sub">Atores: Keanu Reeves,<br> Donnie Yen, Bill Skarsgård
                            <br><br>
                            Diretor: Chad Stahelski
                            <br><br>
                            Classificação: 18+
                        </h6>
                    </div>

                    <div class="card">
                        <img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/23345-cartaz.jpg" alt="" />
                        <h3> 007 – Sem Tempo <br> Para Morrer </h3>
                        <h6 class="sub">
                            Atores: Daniel Craig,<br> Rami Malek
                            <br><br>
                            Diretor: Cary Joji Fukunaga
                            <br><br>
                            Classificação: 14+
                        </h6>
                    </div>


                </div>
                <button class="next-btn">&#10095;</button>
            </div>

            <section class="destaques-section" id="fantasia">
                <h3>Gênero: Fantasia</h3>
                <div class="carousel-container">
                    <button class="prev-btn">&#10094;</button>
                    <div class="carousel">

                        <div class="card">
                            <img src="https://musicart.xboxlive.com/7/7c3b3c00-0000-0000-0000-000000000002/504/image.jpg"
                                alt="" />
                            <h3>Animas Fantásticos</h3>
                            <h6 class="sub">Atores: Eddie Redmayne, <br>Jude Law, Mads Mikkelsen
                                <br><br>
                                Diretor: David Yates
                                <br><br>
                                Classificação: 12+
                            </h6>
                        </div>

                        <div class="card">
                            <img src="https://upload.wikimedia.org/wikipedia/pt/5/53/Maleficent_II.jpg" alt="" />
                            <h3>Malévola: Dona do Mal</h3>
                            <h6 class="sub">Atores: Angelina Jolie,<br> Elle Fanning, Michelle Pfeiffer
                                <br><br>
                                Diretor: Joachim Rønning
                                <br><br>
                                Classificação: 10+
                            </h6>
                        </div>

                        <div class="card">
                            <img src="https://farrapo.com.br/portal/noticias/fotos/18ddu3n9qp348og04w.jpg" alt="" />
                            <h3>Tudo em Todo Lugar <br>ao Mesmo Tempo</h3>
                            <h6 class="sub">Atores: Michelle Yeoh,<br> Stephanie Hsu,<br> Ke Huy Quan
                                <br><br>
                                Diretores: Daniel Kwan,<br> Daniel Scheinert
                                <br><br>
                                Classificação: 16+
                            </h6>
                        </div>

                        <div class="card">
                            <img src="https://upload.wikimedia.org/wikipedia/pt/0/08/Doctor_Strange_in_the_Multiverse_of_Madness_poster.jpeg"
                                alt="" />
                            <h3>Doutor Estranho no <br> Multiverso da Loucura </h3>
                            <h6 class="sub">Atores: Benedict <br>Cumberbatch, Elizabeth <br> Olsen
                                <br><br>
                                Diretor: Sam Raimi
                                <br><br>
                                Classificação: 14+
                            </h6>
                        </div>

                        <div class="card">
                            <img src="https://play-lh.googleusercontent.com/W8DR-RL0aRUJjFlvViEkk9pmzaa-iZFlQpmPO1Hm0-10Q0mzLHspjoBH64PD3l0eGwbo"
                                alt="JW" />
                            <h3>Como Treinar o Seu<br> Dragão 3</h3>
                            <h6 class="sub">
                                Atores (voz): Jay Baruchel,<br> America Ferrera
                                <br><br>
                                Diretor: Dean DeBlois
                                <br><br>
                                Classificação: Livre
                            </h6>
                        </div>

                        <div class="card">
                            <img src="https://upload.wikimedia.org/wikipedia/pt/f/ff/Alice-In-Wonderland-Theatrical-Poster.jpg"
                                alt="" />
                            <h3>Alice no País<br> das Maravilhas</h3>
                            <h6 class="sub">Atores: Mia Wasikowska,<br> Johnny Depp,<br> Helena Bonham Carter
                                <br><br>
                                Diretor: Tim Burton
                                <br><br>
                                Classificação: 10+
                            </h6>
                        </div>
                    </div>
                    <button class="next-btn">&#10095;</button>
                </div>

                <section class="destaques-section" id="terror">
                    <h3>Gênero: Terror</h3>
                    <div class="carousel-container">
                        <button class="prev-btn">&#10094;</button>
                        <div class="carousel">

                            <div class="card">
                                <img src="https://m.media-amazon.com/images/S/pv-target-images/59bdbb09d6aa664a1db9258f96e9e162e5f78996aba1e9d0a010bf8b44605a3e.jpg"
                                    alt="" />
                                <h3>O Exorcista: O Devoto</h3>
                                <h6 class="sub">Atores: Leslie Odom Jr.,<br> Lidya Jewett, Ann Dowd
                                    <br><br>
                                    Diretor: David Gordon Green
                                    <br><br>
                                    Classificação: 16+
                                </h6>
                            </div>

                            <div class="card">
                                <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/4/4f/Terrifier_2_-_poster.jpg/250px-Terrifier_2_-_poster.jpg    "
                                    alt="" />
                                <h3>Terrifier 2</h3>
                                <h6 class="sub">Atores: Lauren LaVera,<br> David Howard Thornton
                                    <br><br>
                                    Diretor: Damien Leone
                                    <br><br>
                                    Classificação: 18+
                                </h6>
                            </div>

                            <div class="card">
                                <img src="https://m.media-amazon.com/images/S/pv-target-images/c344ff9ae2a6e50c63f7e329e4fb689a79d67a456662bf5074b194532542b288.jpg"
                                    alt="" />
                                <h3>Sorria </h3>
                                <h6 class="sub">Atores: Sosie Bacon,<br> Kyle Gallner
                                    <br><br>
                                    Diretor: Parker Finn
                                    <br><br>
                                    Classificação: 16+

                                </h6>
                            </div>

                            <div class="card">
                                <img src="https://br.web.img3.acsta.net/pictures/18/06/14/13/11/1751062.jpg" alt="" />
                                <h3>Hereditário</h3>
                                <h6 class="sub">Atores: Toni Collette,<br> Alex Wolff
                                    <br><br>
                                    Diretor: Ari Aster
                                    <br><br>
                                    Classificação: 18+
                                </h6>
                            </div>

                            <div class="card">
                                <img src="https://upload.wikimedia.org/wikipedia/pt/6/63/The_Nun_II.jpg" alt="JW" />
                                <h3>A Freira 2</h3>
                                <h6 class="sub">Atores: Taissa Farmiga,<br> Storm Reid
                                    <br><br>
                                    Diretor: Michael Chaves
                                    <br><br>
                                    Classificação: 14+
                                </h6>
                            </div>

                            <div class="card">
                                <img src="https://br.web.img3.acsta.net/c_310_420/pictures/22/09/30/20/59/2681511.jpg"
                                    alt="" />
                                <h3>Halloween Ends</h3>
                                <h6 class="sub">Atores: Jamie Lee Curtis,<br><br> Rohan Campbell
                                    <br><br>
                                    Diretor: David Gordon Green
                                    <br><br>
                                    Classificação: 18+
                                </h6>
                            </div>
                        </div>
                        <button class="next-btn">&#10095;</button>
                    </div>

                    <section class="destaques-section" id="comedia">
                        <h3>Gênero: Comédia</h3>
                        <div class="carousel-container">
                            <button class="prev-btn">&#10094;</button>
                            <div class="carousel">

                                <div class="card">
                                    <img src="https://upload.wikimedia.org/wikipedia/pt/d/d8/ScaryMovie.jpg" alt="" />
                                    <h3>Todo Mundo <br> em Pânico</h3>
                                    <h6 class="sub">Atores: Anna Faris,<br>Regina Hall,<br> Shawn Wayans
                                        <br><br>
                                        Diretor: Keenen <br> Ivory Wayans
                                        <br><br>
                                        Classificação: 14+
                                    </h6>
                                </div>

                                <div class="card">
                                    <img src="https://m.media-amazon.com/images/I/81LhHPTy+GS._UF894,1000_QL80_.jpg"
                                        alt="" />
                                    <h3>A Barraca do Beijo 3 </h3>
                                    <h6 class="sub">Atores: Joey King,<br> Joel Courtney, Jacob Elordi
                                        <br><br>
                                        Diretor: Vince Marcello
                                        <br><br>
                                        Classificação: 12+
                                    </h6>
                                </div>

                                <div class="card">
                                    <img src="https://br.web.img2.acsta.net/pictures/17/11/28/19/03/5043910.jpg"
                                        alt="" />
                                    <h3>Jumanji: Bem-vindo <br> à Selva</h3>
                                    <h6 class="sub">Atores: Dwayne Johnson,<br> Kevin Hart, Jack Black
                                        <br><br>
                                        Diretor: Jake Kasdan
                                        <br><br>
                                        Classificação: 10+
                                    </h6>

                                </div>

                                <div class="card">
                                    <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/3/3b/Deadpool_2016.jpg/250px-Deadpool_2016.jpg"
                                        alt="" />
                                    <h3>Deadpool</h3>
                                    <h6 class="sub">Atores: Ryan Reynolds,<br> Morena Baccarin, T.J. Miller
                                        <br><br>
                                        Diretor: Tim Miller
                                        <br><br>
                                        Classificação: 16+
                                    </h6>
                                </div>

                                <div class="card">
                                    <img src="https://m.media-amazon.com/images/I/61e9IogllxL._AC_UF894,1000_QL80_.jpg"
                                        alt="JW" />
                                    <h3>A Grande Família:<br>O Filme</h3>
                                    <h6 class="sub">Atores: Marcos Oliveira,<br> Pedro Cardoso, Marieta Severo
                                        <br><br>
                                        Diretor: Cacá Diegues
                                        <br><br>
                                        Classificação: Livre
                                    </h6>
                                </div>

                                <div class="card">
                                    <img src="https://s2-globofilmes.glbimg.com/y_AMe6Z2eze14f9pj43imO-zFqM=/0x0:1814x2665/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_755cbb8e98bc4df6b024f1581a117b52/internal_photos/bs/2022/D/U/RAlOBjTcypCNXl79MaMg/mmeup3-0002-cartaz-hospital-tel-lado-rgb-72dpis-final-01-jt.jpg"
                                        alt="" />
                                    <h3>Minha Mãe é <br> uma Peça</h3>
                                    <h6 class="sub">Atores: Paulo Gustavo,<br> Mariana Xavier,<br> Rodrigo Pandolfo
                                        <br><br>
                                        Diretor: André Pellenz
                                        <br><br>
                                        Classificação: Livre
                                    </h6>
                                </div>
                            </div>
                            <button class="next-btn">&#10095;</button>
                        </div>

                        <section class="destaques-section" id="suspense">
                            <h3>Gênero: Suspense</h3>
                            <div class="carousel-container">
                                <button class="prev-btn">&#10094;</button>
                                <div class="carousel">

                                    <div class="card">
                                        <img src="https://br.web.img3.acsta.net/pictures/14/08/20/21/11/442051.jpg"
                                            alt="" />
                                        <h3>Garota Exemplar</h3>
                                        <h6 class="sub">Atores: Ben Affleck,<br> Rosamund Pike
                                            <br><br>
                                            Diretor: David Fincher
                                            <br><br>
                                            Classificação: 14+
                                        </h6>
                                    </div>

                                    <div class="card">
                                        <img src="https://m.media-amazon.com/images/I/61AFbsFwh7L._AC_UF894,1000_QL80_.jpg"
                                            alt="" />
                                        <h3> A Origem</h3>
                                        <h6 class="sub">Atores:Leonardo DiCaprio,<br> Joseph Gordon-Levitt
                                            <br><br>
                                            Diretor: Christopher Nolan
                                            <br><br>
                                            Classificação: 14+
                                        </h6>
                                    </div>

                                    <div class="card">
                                        <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/c/c4/Prisoners_p%C3%B4ster.jpg/250px-Prisoners_p%C3%B4ster.jpg"
                                            alt="" />
                                        <h3> Prisioneiros</h3>

                                        <h6 class="sub">Atores: Hugh Jackman,<br> Jake Gyllenhaal
                                            <br><br>
                                            Diretor: Denis Villeneuve
                                            <br><br>
                                            Classificação: 16+
                                        </h6>
                                    </div>

                                    <div class="card">
                                        <img src="https://indika.tv/images/filmes/Fragmentado.jpg" alt="" />
                                        <h3>Fragmentado</h3>

                                        <h6 class="sub">Atores: James McAvoy,<br> Anya Taylor-Joy
                                            <br>
                                            <br>
                                            Diretor: M. Night Shyamalan
                                            <br>
                                            <br>
                                            Classificação: 16+
                                        </h6>
                                    </div>

                                    <div class="card">
                                        <img src="https://upload.wikimedia.org/wikipedia/pt/4/4c/Enemy_cartaz.jpg"
                                            alt="JW" />
                                        <h3> O Homem Duplicado</h3>
                                        <h6 class="sub">Atores: Jake Gyllenhaal,<br> Mélanie Laurent
                                            <br><br>
                                            Diretor: Denis Villeneuve
                                            <br><br>
                                            Classificação: 14+
                                        </h6>
                                    </div>

                                    <div class="card">
                                        <img src="https://m.media-amazon.com/images/S/pv-target-images/e56cb9c79bf312d0028ccd980bfd57649aaaaf90139fb633fbeffe41d86106aa.jpg"
                                            alt="" />
                                        <h3>Cisne Negro</h3>
                                        <h6 class="sub">Atores: Natalie Portman,<br> Mila Kunis
                                            <br><br>
                                            Diretor: Darren Aronofsky
                                            <br><br>
                                            Classificação: 16+
                                        </h6>
                                    </div>
                                </div>
                                <button class="next-btn">&#10095;</button>
                            </div>


                            <h2>Filmes Vencedores do Oscar de Melhor Filme</h2>

                            <div class="cards-container">
                                <div class="card-lancamento">
                                    <img src="https://br.web.img2.acsta.net/pictures/22/05/16/17/59/5165498.jpg"
                                        alt="Tudo em Todo Lugar ao Mesmo Tempo" />
                                    <h3>Tudo em Todo Lugar ao Mesmo Tempo (2023)</h3>
                                    <p>Vencedor do Oscar de Melhor Filme em 2023.</p>
                                    <p>Data da cerimônia: 12 de março de 2023</p>
                                    <p>Um filme emocionante que mistura drama, comédia e fantasia, explorando múltiplas
                                        realidades.</p>
                                </div>

                                <div class="card-lancamento">
                                    <img src="https://upload.wikimedia.org/wikipedia/pt/5/5b/Oppenheimer_poster.jpg"
                                        alt="Oppenheimer" />
                                    <h3>Oppenheimer (2024)</h3>
                                    <p>Vencedor do Oscar de Melhor Filme em 2024.</p>
                                    <p>Data da cerimônia: 10 de março de 2024</p>
                                    <p>Biografia dramática sobre o físico que liderou o Projeto Manhattan.</p>
                                </div>

                                <div class="card-lancamento">
                                    <img src="https://i.pinimg.com/736x/fd/0a/78/fd0a7888a1165a085fabf22a1ac3fd41.jpg"
                                        alt="imagem com ?" />
                                    <h3>Oscar 2025</h3>
                                    <p>A cerimônia ainda não ocorreu.</p>
                                    <p>Os vencedores serão atualizados após o evento.</p>
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