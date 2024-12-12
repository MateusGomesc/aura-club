<?php
    include "../includes/input.php";
    include "../includes/autoLoad.php";
    Security::verifyAuthentication();
    
    if(isset($_POST) && count($_POST)){
        require_once __DIR__ . "/../../controllers/PedidoController.php";

        $pedido = new Pedido();
        $pedido->setData(date('Y-m-d'));
        $pedido->setValor_total((float)$_POST['valorTotal']);
        $pedido->setId_user(htmlspecialchars(unserialize($_SESSION['User'])->getId_user()));
        
        $adicionais = json_decode($_POST['adicionais'], true);
        
        $PedidoController = new PedidoController();
        $res = $PedidoController->add($pedido, $adicionais, $_POST['id_produto']);
        if($res){
            header("location: ../Confirmacao");
            exit();
        }
    }
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
        <?php FlashMessage::getMessage(); ?>
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
            <input type="hidden" name="adicionais" id="adicionais">
            <input type="hidden" name="valorTotal" id="valorTotal">
            <input type="hidden" name="id_produto" id="id_produto">
            <button class="btnRed" type="submit">Realizar pagamento</button>
        </form>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
    <script src="../assets/js/cartao.js"></script>
</body>
</html>