<?php
    include __DIR__ . "/../includes/autoLoad.php";
    Security::verifyAuthentication();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Pagamento</title>
    <link rel="stylesheet" href="../assets/css/pagamento.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <div class="nota">
            <h3>Resumo do pedido:</h3>
            <div class="table">
                <div class="total">
                    <div class="name">Total</div>
                    <div class="price"></div>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <div class="head">
                <h4>Formas de pagamento</h4>
                <img src="../assets/img/chevron.png" alt="">
            </div>
            <div class="pagamentos" method="get" action="">
                <div class="metodo">
                    <div>
                        <img src="../assets/img/cardIcon.png" alt="Ícone de cartão">
                        <p>Cartão Crédito/Débito</p>
                    </div>
                    <input type="radio" name="metodo" id="cartao" value="0">
                </div>
                <div class="metodo">
                    <div>
                        <img src="../assets/img/pixIcon.png" alt="Ícone do pix">
                        <p>Pix</p>
                    </div>
                    <input type="radio" name="metodo" id="pix" value="1">
                </div>
            </div>
        </div>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
    <script src="../assets/js/pagamento.js"></script>
</body>
</html>