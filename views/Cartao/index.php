<?php
    include "../includes/input.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Cartão</title>
    <link rel="stylesheet" href="../assets/css/cartao.css">
    <link rel="stylesheet" href="../assets/css/input.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <div class="cardContainer">
            <div class="card">
                <div class="front">
                    <div class="images">
                        <img src="../assets/img/chipIcon.png" alt="Ícone de chip magnético">
                        <img src="" alt="Ícone da bandeira do cartão" class="flagLogo">
                    </div>
                    <h4 class="number" id="number">**** **** **** ****</h4>
                    <div class="info">
                        <div class="name">
                            <p>Nome</p>
                            <h6 id="name">***</h6>
                        </div>
                        <div class="vencimento">
                            <p>Vencimento</p>
                            <h6 id="date">**/**</h6>
                        </div>
                    </div>
                </div>
                <div class="back">
                    <p>Aura Club Payment</p>
                    <div class="cvv">
                        <p>CVV</p>
                        <div class="num" id="cvvNumber"></div>
                    </div>
                    <div class="imgContainer">
                        <img src="" alt="Ícone da bandeira do cartão" class="flagLogo">
                    </div>
                </div>
            </div>
        </div>
        <form action="" method="post">
            <?php
                input('numero', 'Número do cartão:', '9999 9999 9999 9999', 'text', '16', '', '', 'flipCard(false)');
                input('nome', 'Nome do cartão:', 'José da Silva', 'text', '40', '', '', 'flipCard(false)');
            ?>
            <div class="vencimento">
                <label for="mes">Vencimento:</label>
                <div>
                    <?php
                        input('mes', '', 'Mês', 'text', '2', '1', '12', 'flipCard(false)');
                        input('ano', '', 'Ano', 'text', '4', '2024', '', 'flipCard(false)');
                    ?>
                </div>
            </div>
            <?php
                input('cvv', 'CVV:', '***', 'text', '3', '', '','flipCard(true)')
            ?>
            <button class="btnRed" type="submit">Realizar pagamento</button>
        </form>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
    <script src="../assets/js/cartao.js"></script>
</body>
</html>