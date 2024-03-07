<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .btn-voltar {
            display: inline-block;
            padding: 10px 20px;
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(18, 7, 139));
            color: white; 
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px; 
            transition: background-color 0.3s;
        }

        .btn-voltar:hover {
            background-image: linear-gradient(to right, rgb(3, 81, 172), rgb(15, 6, 117));
            color: #ffffff;
        }
    </style>
</head>
<body>
    <a href="index.php" class="btn-voltar">Voltar</a>
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