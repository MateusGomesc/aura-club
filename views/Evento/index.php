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
        <div class="imgEvent"></div>
        <div class="details">
            <h3>Night Club - Alok and Calvin Harris</h3>
            <div class="info">
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
                <div class="ticket">
                    <div class="price">
                        <p>Ticket:</p>
                        <h3>R$430,00</h3>
                    </div>
                    <div class="count">
                        <img src="../assets/img/minusIcon.png" alt="Ícone de decrementação" class="minus">
                        <p class="number">1</p>
                        <img src="../assets/img/plusIcon.png" alt="Ícone de incrementação" class="plus">
                    </div>
                </div>
            </div>
            <p class="subTitle">Artistas:</p>
            <div class="artistas">
                <div class="card">
                    <img src="../assets/img/alok.jpg" alt="Foto artista">
                    <div>
                        <p class="name">Alok</p>
                        <p class="style">Dance/Eletrônica</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../assets/img/calvinHarris.jpg" alt="Foto artista">
                    <div>
                        <p class="name">Calvin Harris</p>
                        <p class="style">Dance/Eletrônica</p>
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
            <h3>R$860,00</h3>
        </div>
        <a href="../Adicionais/" class="btnRed">
            Continuar
            <img src="../assets/img/arrow.svg" alt="Seta para direita">
        </a>
    </div>

    <?php include "../includes/scripts.php"; ?>
    <script src="../assets/js/evento.js"></script>
</body>
</html>