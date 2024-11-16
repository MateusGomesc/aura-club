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
                    <p>Open Bar: R$1000,00 <span class="light">/ ingresso</span></p>
                </div>
                <div>
                    <img src="../assets/img/foodIcon.svg" alt="Ícone de calendário">
                    <p>Open Food: R$750,00 <span class="light">/ ingresso</span></p>
                </div>
            </div>
            <div class="tickets">
                <div class="ticket">
                    <p>Ticket 1:</p>
                    <div class="add">
                        <h4>OpenBar</h4>
                        <button class="btnAdd">Adicionar</button>
                    </div>
                    <div class="add">
                        <h4>OpenFood</h4>
                        <button class="btnAdd">Adicionar</button>
                    </div>
                </div>
                <div class="ticket">
                    <p>Ticket 2:</p>
                    <div class="add">
                        <h4>OpenBar</h4>
                        <button class="btnAdd">Adicionar</button>
                    </div>
                    <div class="add">
                        <h4>OpenFood</h4>
                        <button class="btnAdd">Adicionar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "../includes/footer.php"; ?>
    <div class="cart">
        <div class="price">
            <p>Valor Total:</p>
            <h3>R$860,00</h3>
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