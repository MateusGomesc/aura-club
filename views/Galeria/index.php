<?php
    include __DIR__ . "/../includes/autoLoad.php";
    Security::verifyAuthentication();
    require_once __DIR__ . "/../../controllers/EventoController.php";
    $EventoController = new EventoController();
    $resultData = $EventoController->read();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Galeria de fotos</title>
    <link rel="stylesheet" href="../assets/css/galeria.css">
</head>
<body>
    <?php include "../includes/header.php" ?>
    <main>
        <div class="banner">
            <h2>Galeria de fotos</h2>
        </div>
        <div class="container">
            <div class="foto">
                <div class="legenda">
                    <p>Nigth Club - Alok and Calvin Harris</p>
                </div>
            </div>
        </div>
        <h2 class="msg">Gostou do que viu?</h2>
        <h3 class="submsg">Participe do próximo evento!</h3>
        <div class="container">
            <?php foreach($resultData as $data){ ?>
                <a href="../Evento/?id=<?= $data->getId_evento() ?>" class="card">
                    <div class="cardContent">
                        <h6><?= $data->getNome() ?></h6>
                        <div class="info">
                            <div class="item">
                                <img src="../assets/img/calenderIcon.png" alt="Ícone de calendário">
                                <p><?= $data->formatDate() ?></p>
                            </div>
                            <div class="item">
                                <img src="../assets/img/clockIcon.png" alt="Ícone de calendário">
                                <p><?= $data->formatHour() ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </main>
    <?php include "../includes/footer.php" ?>

    <?php include "../includes/scripts.php" ?>
</body>
</html>