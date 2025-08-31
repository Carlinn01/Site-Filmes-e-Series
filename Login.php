<?php
session_start();
require "src/ConexaoBD.php";

$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    try {
        $pdo = ConexaoBD::conectar();
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario["senha"])) {
            $_SESSION["usuario_id"]   = $usuario["id"];
            $_SESSION["usuario_nome"] = $usuario["nome"];
            $_SESSION["usuario_tipo"] = $usuario["tipo"]; // pega tipo de usuário
            header("Location: index.php");
            exit;
        } else {
            $erro = "Email ou senha incorretos!";
        }
    } catch (PDOException $e) {
        $erro = "Erro: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login - FilmesFlix</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: linear-gradient(135deg, #121212, #1f1f1f);
    font-family: 'Roboto', sans-serif;
  }
  .form-container {
    background-color: #1c1c1c;
    padding: 50px 40px;
    border-radius: 12px;
    box-shadow: 0 0 30px rgba(0,0,0,0.8);
    width: 100%;
    max-width: 450px;
    text-align: center;
  }
  .form-container h2 {
    color: #e50914;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 48px;
    margin-bottom: 30px;
    letter-spacing: 2px;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.7);
  }
  .form-container input {
    width: 100%;
    padding: 14px;
    margin: 10px 0;
    border: none;
    border-radius: 6px;
    background-color: #2c2c2c;
    color: #fff;
    font-size: 16px;
  }
  .form-container input:focus {
    outline: 2px solid #e50914;
  }
  .btn-submit {
    width: 100%;
    background-color: #e50914;
    color: #fff;
    padding: 14px;
    margin-top: 15px;
    font-size: 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
    font-weight: bold;
  }
  .btn-submit:hover {
    background-color: #ff1c1c;
  }
  .mensagem {
    margin-top: 20px;
    color: #fff;
    font-size: 14px;
  }
  .mensagem a {
    color: #e50914;
    text-decoration: none;
    font-weight: bold;
  }
  p a {
    color: #e50914;
    text-decoration: none;
    font-weight: bold;
  }
  p {
    margin-top: 15px;
    color: #ccc;
  }
  /* Shake animation para erro */
  .shake {
    animation: shake 0.5s;
  }
  @keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
  }
</style>
</head>
<body>

<div class="form-container <?php if($erro) echo 'shake'; ?>">
    <h2>LOGIN</h2>

    <?php if ($erro): ?>
        <div class="mensagem"><?= $erro ?></div>
    <?php endif; ?>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit" class="btn-submit">Entrar</button>
    </form>

    <p>Não tem conta? <a href="registro.php">Cadastre-se agora</a></p>
    <p><a href="index.php">Sair</a> </p>
</div>

</body>
</html>
