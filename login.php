<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="tela-login">
        <h1>Login</h1>
        <form action ="loginTest.php" method="POST">
            <input type="email" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" name="enviar" id="enviar">
        </form>
    </div>
</body>
</html>