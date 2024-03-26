<?php

session_start();

if (!isset($_SESSION['email']) == true AND (!isset($_SESSION['senha'])) == true){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}else{
    $logado = $_SESSION['email'];

}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>
    <link rel="stylesheet" href="css/style-system.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <main class="container">
    <h1>Bem vindo, <u><?php echo $logado; ?></u></h1>

</main>

    <?php include 'footer.php'; ?>

</body>
</html>