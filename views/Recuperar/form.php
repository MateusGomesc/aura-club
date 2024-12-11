<?php
    include "../includes/input.php";
    include __DIR__ . "/../includes/autoLoad.php";
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }

    if(isset($_POST) && !empty($_POST)){
        require_once __DIR__ . "/../../controllers/UserController.php";

        $UserController = new UserController();
        $res = $UserController->editPassword($_POST['oldPassword'], $_POST['newPassword'], $_POST['confirmedNewPassword'], $_POST['id']);
        if($res){
            header("location: ../Login");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Recuperação de senha</title>
    <link rel="stylesheet" href="../assets/css/input.css">
    <link rel="stylesheet" href="../assets/css/formRecuperacao.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div>
            <?php FlashMessage::getMessage();?>
        </div>
        <form action="" method="post">
            <img src="../assets/img/asas-vermelhas.svg" alt="Logo Aura Club">
            <?php
                input("oldPassword", "Senha antiga:", "Digite sua senha antiga", "password");
                input("newPassword", "Nova senha:", "Digite sua nova senha", "password");
                input("confirmedNewPassword", "Confirme sua nova senha:", "Digite sua nova senha novamente", "password");
                input("id", "", "", "hidden", '', '', '', '', $_GET['id']);
            ?>
            <button type="submit" class="btnRed">Modificar senha</button>
        </form>
    </div>
</body>
</html>