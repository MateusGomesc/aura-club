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
                <h3>Night Club - Alok and Calvin Harris</h3>
                <div class="eventInfo">
                    <div>
                        <img src="../assets/img/calenderIcon.png" alt="Ícone de calendário">
                        <p>Sábado, 19 de Outubro</p>
                    </div>
                    <div>
                        <img src="../assets/img/clockIcon.png" alt="Ícone de calendário">
                        <p>23:00</p>
                    </div>
                    <div>
                        <img src="../assets/img/locationicon.png" alt="Ícone de localidade">
                        <p>Aura Club</p>
                    </div>
                </div>
            </div>
            <div class="nota">
                <div class="table">
                    <div class="item">
                        <div class="name">Ticket 1</div>
                        <div class="price">R$1180,00</div>
                    </div>
                    <div class="item">
                        <div class="name">Ticket 2</div>
                        <div class="price">R$1180,00</div>
                    </div>
                    <div class="total">
                        <div class="name">Total</div>
                        <div class="price">R$2360,00</div>
                    </div>
                </div>
                <a href="../home/" class="btnRed">Voltar a Home</a>
            </div>
        </section>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
</body>
</html>