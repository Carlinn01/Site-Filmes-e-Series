<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container w=50 m-5 m-auto ">

<form action="cadastro.php" method="POST" enctype="multipart/form-data">

    <h3 class="text-center mb-5">Cadastro de clientes</h3>
    <label>Nome</label>
    <input type="text" name="nome"> 
    <br><br>
    <label>Foto</label>
    <input type="file" name="imagem">
    <br><br>
    <button type="submit" class="btn btn-warning">Cadastro</button>
</form>
    
</body>
</html>