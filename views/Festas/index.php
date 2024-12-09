<?php
    include "../includes/autoLoad.php";
    Security::verifyAuthentication();
    require_once __DIR__ . "/../../controllers/EventoController.php";
    $EventoController = new EventoController();
    $resultData = $EventoController->read();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Festas</title>
    <link rel="stylesheet" href="../assets/css/festas.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <div class="banner">
            <h2>Agenda de festas</h2>
        </div>
        <p>Próximas festas:</p>
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
        <h2 class="msg">Viva o momento, curta cada batida e deixe a diversão te encontrar!</h2>
        <div class="breves">
            <div class="breve" id="breve1">
                Em breve!
            </div>
            <div class="breve" id="breve2">
                Em breve!
            </div>
            <div class="breve" id="breve3">
                Em breve!
            </div>
            <div class="breve" id="breve4">
                Em breve!
            </div>
        </div>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
</body>
</html>