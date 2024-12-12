<?php
    include __DIR__ . "/../includes/autoLoad.php";
    Security::verifyAuthentication();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Confirmação</title>
    <link rel="stylesheet" href="../assets/css/confirmacao.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <h3>Pagamento confirmado!</h3>
        <section>
            <div class="info">
                <h3></h3>
                <div class="eventInfo">
                    <div>
                        <img src="../assets/img/calenderIcon.png" alt="Ícone de calendário">
                        <p id="data"></p>
                    </div>
                    <div>
                        <img src="../assets/img/clockIcon.png" alt="Ícone de calendário">
                        <p id="horario"></p>
                    </div>
                    <div>
                        <img src="../assets/img/locationicon.png" alt="Ícone de localidade">
                        <p>Aura Club</p>
                    </div>
                </div>
            </div>
            <div class="nota">
                <a href="../home/" class="btnRed">Voltar a Home</a>
            </div>
        </section>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
    <script src="../assets/js/confirmacao.js"></script>
</body>
</html>