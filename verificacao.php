<?php 
    session_start();
    $email = filter_input(INPUT_POST, "username", FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($email && $senha){
        unset($_SESSION["erro"]);
        setcookie("username", $email, time()+86400);
        header ("Location: HomePage/chat.php");
        exit;
    }else{
        $_SESSION["erro"]="Por favor ensira os dados corretamente";
        header("Location: index.php");
        exit;
    }
?>