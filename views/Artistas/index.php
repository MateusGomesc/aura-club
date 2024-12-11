<?php
    include __DIR__ . "/../includes/autoLoad.php";
    Security::verifyAuthentication();
    
    require_once __DIR__ . '/../../controllers/ArtistaController.php';
    $ArtistaController = new ArtistaController();
    $resultData = $ArtistaController->read();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Artistas</title>
    <link rel="stylesheet" href="../assets/css/artistas.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <h1 class="titleSection">Nossos artistas</h1>
        <div class="container">
            <?php foreach($resultData as $data){ ?>
                <div class="card">
                    <p><?= $data->getNome() ?></p>
                </div>
            <?php } ?>
        </div>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
</body>
</html>