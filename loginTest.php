<?php

    if (isset($_POST['enviar']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        require_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $conn->prepare($sql);
        $stmt = $conn->query($sql);
        
        $contagem = $stmt->rowCount();
        if ($contagem < 1){
            echo "Não existe cadastro!";
        }else{
            echo "Possui cadastro!";
        }
        print_r($stmt);

    }else{
        header('Location: login.php');
    }
?>