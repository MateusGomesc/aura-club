<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Pix</title>
    <link rel="stylesheet" href="../assets/css/pix.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <h3>Pagamento via pix:</h3>
        <section>
            <div class="priceCard">
                <p>Valor total:</p>
                <h3>R$2360,00</h3>
            </div>
            <div class="codigo">
                <div class="qrCode">
                    <img src="../assets/img/Qrcode.png" alt="Qrcode para pagamento via pix">
                    <div class="link">
                        <div id="linkPix">00020126580014BR.GOV.BCB.PIX0136+5511999999992520400005303986540639.905802BR5925Aura-Company6009Cidade000A62070503***6304ABCD</div>
                        <p id="info">Clique no texto para copiar</p>
                    </div>
                </div>
                <button class="btnRed">Confirmar pagamento</button>
            </div>
        </section>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
    <script src="../assets/js/pix.js"></script>
</body>
</html>