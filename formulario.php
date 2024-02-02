<?php

if (isset($_POST['enviar'])){
    //print_r($_POST['nome']);
    //print_r('<br>');
    //print_r($_POST['email']);
    //print_r('<br>');
    //print_r($_POST['telefone']);
    //print_r('<br>');
    //print_r($_POST['genero']);
    //print_r('<br>');
    //print_r($_POST['data-nascimento']);
    //print_r('<br>');
    //print_r($_POST['cidade']);
    //print_r('<br>');
    //print_r($_POST['estado']);
    //print_r('<br>');
    //print_r($_POST['endereco']);

    require_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $dataNascimento = $_POST['data-nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $inserir = "INSERT INTO usuarios (nome, email, senha, telefone, genero, data_nascimento, cidade, estado, endereco)
    VALUES (:nome, :email, :senha, :telefone, :genero, :data_nascimento, :cidade, :estado, :endereco)";
    $stmt = $conn->prepare($inserir);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senha);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":genero", $genero);
    $stmt->bindParam(":data_nascimento", $dataNascimento);
    $stmt->bindParam(":cidade", $cidade);
    $stmt->bindParam(":estado", $estado);
    $stmt->bindParam(":endereco", $endereco);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "Inserção feita com sucesso." . PHP_EOL;
    } else {
        echo "Erro na inserção." . PHP_EOL;
    }
}

$conn = null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/style-form.css">
</head>
<body>
    <a href="home.php" id="voltar">Voltar</a>
    <div class ="box">
        <form action="formulario.php" method="post">
            <fieldset>
            <legend><b>Cadastro de Clientes</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome Completo</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>
            <div class="inputBox">    
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br>
            <p>Gênero:</p>
            <input type="radio" name="genero" id="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <input type="radio" name="genero" id="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <input type="radio" name="genero" id="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
            <label for="data-nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="data-nascimento" id="data-nascimento" required>
            <br><br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado"class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <br><br>
            <input type="submit" name="enviar" id="enviar">
        </form>
            </fieldset>
    </div>
</body>
</html>