<?php
    include "../includes/autoLoad.php";
    Security::verifyAuthentication();
    require_once __DIR__ . "/../../controllers/EventoController.php";
    $EventoController = new EventoController();
    $resultData = $EventoController->read();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Painel de controle</title>
    <link rel="stylesheet" href="../assets/css/painel.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <h2>Painel de controle</h2>
        <div class="buttonArea">
            <a href="adicionar.php" class="btnRed">Adicionar evento</a>
            <a href="adicionarArtista.php" class="btnRed">Adicionar artista</a>
        </div>
        <div class="container">
            <?php foreach($resultData as $data){ ?>
            <div class="event">
                <div class="card" style="background-image: url('<?= $data->getImagem(); ?>');">
                    <div class="cardContent">
                        <h6><?= $data->getNome() ?></h6>
                        <div class="info">
                            <div class="item">
                                <img src="../assets/img/calenderIcon.png" alt="Ícone de calendário">
                                <p><?= $data->formatDate() ?></p>
                            </div>
                            <div class="item">
                                <img src="../assets/img/clockIcon.png" alt="Ícone de calendário">
                                <p><?= $data->formatHour() ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actions">
                    <a href="editar.php?id=<?= $data->getId_evento() ?>" class="btnBlue">Editar</a>
                    <button class="btnRed btnRemove" onclick="confirmation(<?= $data->getId_evento(); ?>)">Excluir</button>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
    <script>
        const confirmation = (id) => {
            if(confirm('Deseja realmente excluir esse evento?')){
                window.location.href = 'excluir.php?id=' + id
            }
        }
    </script>
</body>
</html>