<?php
    include "../includes/autoLoad.php";
    Security::verifyAuthentication();
    include "../../controllers/UserController.php";
    $UserController = new UserController();
    $resultData = $UserController->read();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Club Insiders</title>
    <link rel="stylesheet" href="../assets/css/club.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main class="container">
        <h2>Club Insiders</h2>
        <div class="members">
            <?php foreach($resultData as $data){ ?>
                <div class="member">
                    <p class="name"><strong><?= $data->getNome(); ?></strong></p>
                    <p class="insta"><?= $data->getInstagram(); ?></p>
                </div>
            <?php } ?>
        </div>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
</body>
</html>