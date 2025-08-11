<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Cadastro de Séries - FilmesFlix</title>
</head>
<body class="container w-50 m-5 mx-auto">
    <form action="cadastro-series.php" method="POST" enctype="multipart/form-data">
        <h3 class="text-center mb-5">Cadastro de Séries</h3>
        
        <div class="mb-3">
            <label for="titulo" class="form-label">Título da Série</label>
            <input type="text" class="form-control" name="titulo" id="titulo" required>
        </div>

        <div class="mb-3">
            <label for="imagem" class="form-label">Poster da Série</label>
            <input type="file" class="form-control" name="imagem" id="imagem" accept="image/*" required>
        </div>

        <div class="mb-3">
            <label for="atores" class="form-label">Atores Principais</label>
            <textarea class="form-control" name="atores" id="atores" rows="2" placeholder="Ex: Bryan Cranston, Aaron Paul, Anna Gunn"></textarea>
        </div>

        <div class="mb-3">
            <label for="diretor" class="form-label">Diretor/Criador</label>
            <input type="text" class="form-control" name="diretor" id="diretor" placeholder="Ex: Vince Gilligan">
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label">Gênero</label>
            <select class="form-select" name="genero" id="genero" required>
                <option value="">Selecione um gênero</option>
                <option value="drama">Drama</option>
                <option value="acao">Ação</option>
                <option value="comedia">Comédia</option>
                <option value="terror">Terror</option>
                <option value="suspense">Suspense</option>
                <option value="fantasia">Fantasia</option>
                <option value="ficcao-cientifica">Ficção Científica</option>
                <option value="romance">Romance</option>
                <option value="documentario">Documentário</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="classificacao" class="form-label">Classificação Indicativa</label>
            <select class="form-select" name="classificacao" id="classificacao" required>
                <option value="">Selecione a classificação</option>
                <option value="Livre">Livre</option>
                <option value="10+">10+</option>
                <option value="12+">12+</option>
                <option value="14+">14+</option>
                <option value="16+">16+</option>
                <option value="18+">18+</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="temporadas" class="form-label">Número de Temporadas</label>
            <input type="number" class="form-control" name="temporadas" id="temporadas" min="1" placeholder="Ex: 5">
        </div>

        <div class="mb-3">
            <label for="ano_lancamento" class="form-label">Ano de Lançamento</label>
            <input type="number" class="form-control" name="ano_lancamento" id="ano_lancamento" min="1900" max="2030" placeholder="Ex: 2008">
        </div>

        <div class="mb-3">
            <label for="sinopse" class="form-label">Sinopse</label>
            <textarea class="form-control" name="sinopse" id="sinopse" rows="4" placeholder="Descreva brevemente a série..."></textarea>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="destaque" id="destaque" value="1">
            <label class="form-check-label" for="destaque">
                Marcar como destaque na página principal
            </label>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-warning btn-lg">Cadastrar Série</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
