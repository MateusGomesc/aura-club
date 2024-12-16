<?php
    if(isset($_GET['id']) && !empty($_GET['id'])){
        require_once __DIR__ . '/../../controllers/EventoController.php';
        $eventoController = new EventoController();
        $eventData = $eventoController->fullInformation($_GET['id']);
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Evento</title>
    <link rel="stylesheet" href="../assets/css/evento.css">
    <link rel="stylesheet" href="../assets/css/cart.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <div class="imgEvent" style="background-image: url('<?= $eventData['evento']->getImagem(); ?>');"></div>
        <div class="details">
            <h3><?= $eventData['evento']->getNome() ?></h3>
            <div class="info">
                <div class="eventInfo">
                    <div>
                        <img src="../assets/img/calenderIcon.png" alt="Ícone de calendário">
                        <p id="data"><?= $eventData['evento']->formatDate() ?></p>
                    </div>
                    <div>
                        <img src="../assets/img/clockIcon.png" alt="Ícone de calendário">
                        <p id="hora"><?= $eventData['evento']->formatHour() ?></p>
                    </div>
                    <div>
                        <img src="../assets/img/locationicon.png" alt="Ícone de localidade">
                        <p>Aura Club</p>
                    </div>
                </div>
                <div class="ticket">
                    <input type="hidden" id="id_produto" name="id_produto" value="<?= $eventData['evento']->getId_produto(); ?>">
                    <div class="price">
                        <p>Ticket:</p>
                        <h3><?= $eventData['ticket']->formatPrice() ?></h3>
                    </div>
                    <div class="count">
                        <img src="../assets/img/minusIcon.png" alt="Ícone de decrementação" class="minus">
                        <input id='quantity' class="number" type="number" value="1" min="1" readonly/>
                        <img src="../assets/img/plusIcon.png" alt="Ícone de incrementação" class="plus">
                    </div>
                </div>
            </div>
            <div class="regras">
                <div>
                    <p class="subTitle">Regras do Evento</p>
                    <img src="../assets/img/chevron.png" alt="Chevron">
                </div>
                <div class="information">
                    <ul>
                        <li>Ser maior de 18 anos</li>
                        <li>Não é permitido a entrada de armas e similares</li>
                        <li>É obrigatório apresentar um documento de identidade com foto para comprovar a maioridade</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <?php include "../includes/footer.php"; ?>
    <div class="cart"> 
        <div class="price">
            <p>Valor Total:</p>
            <h3><?= $eventData['ticket']->formatPrice() ?></h3>
        </div>
        <a href="../Adicionais/" class="btnRed" type="submit">
            Continuar
            <img src="../assets/img/arrow.svg" alt="Seta para direita">
        </a>
    </div>

    <?php include "../includes/scripts.php"; ?>
    <script src="../assets/js/evento.js"></script>
</body>
</html>