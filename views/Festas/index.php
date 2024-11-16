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
            <a href="../Evento/" class="card">
                <img src="../assets/img/bannerEvento.jpg" alt="Banner do Evento">
                <div class="cardContent">
                    <h6>Night Club - Alok and Calvin Harris</h6>
                    <div class="info">
                        <div class="item">
                            <img src="../assets/img/calenderIcon.png" alt="Ícone de calendário">
                            <p>Sábado, 19 de Outubro</p>
                        </div>
                        <div class="item">
                            <img src="../assets/img/clockIcon.png" alt="Ícone de calendário">
                            <p>23:00</p>
                        </div>
                    </div>
                </div>
            </a>
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