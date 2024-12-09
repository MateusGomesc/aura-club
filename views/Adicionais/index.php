<?php
    require_once __DIR__ . '/../../controllers/AdicionalController.php';
    $AdicionalController = new AdicionalController();
    $resultData = $AdicionalController->read();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Adicionais</title>
    <link rel="stylesheet" href="../assets/css/adicionais.css">
    <link rel="stylesheet" href="../assets/css/cart.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <div class="imgEvent"></div>
        <div class="details">
            <h3>Night Club - Alok and Calvin Harris</h3>
            <div class="eventInfo">
                <div>
                    <img src="../assets/img/drinkIcon.svg" alt="Ícone de calendário">
                    <p>Open Bar: R$<span id="barPrice"><?= $resultData[0]->getValor() ?></span><span class="light">/ ingresso</span></p>
                </div>
                <div>
                    <img src="../assets/img/foodIcon.svg" alt="Ícone de calendário">
                    <p>Open Food: R$<span id="foodPrice"><?= $resultData[1]->getValor() ?> <span class="light">/ ingresso</span></p>
                </div>
            </div>
            <div class="tickets"></div>
        </div>
    </main>
    <?php include "../includes/footer.php"; ?>
    <div class="cart">
        <div class="price">
            <p>Valor Total:</p>
            <h3></h3>
        </div>
        <a href="../Pagamento/" class="btnRed">
            Continuar
            <img src="../assets/img/arrow.svg" alt="Seta para direita">
        </a>
    </div>

    <?php include "../includes/scripts.php"; ?>
    <script src="../assets/js/adicionais.js"></script>
</body>
</html>