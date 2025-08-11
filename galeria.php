<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Minha Galeria de fotos</h3>

    <?php
    require_once "src/ClienteDAO.php";
    $clientes = ClienteDAO::listar();
    for ($i=0; $i < count($clientes); $i++) { 
    ?>
    <p>Nome: <?=$clientes[$i]['nome']?></p>
    <p>
    <img src="uploads/<?=$clientes[$i]['imagem']?>" style="width:200px">
    </p>
    <?php
    }
    ?>


</body>
</html>