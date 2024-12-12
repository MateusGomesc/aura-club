<?php
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
    <title>Pix</title>
    <link rel="stylesheet" href="../assets/css/pix.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <?php FlashMessage::getMessage(); ?>
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
                <form action="" method="post">
                <input type="hidden" name="adicionais" id="adicionais">
                <input type="hidden" name="valorTotal" id="valorTotal">
                <input type="hidden" name="id_produto" id="id_produto">
                    <button class="btnRed">Confirmar pagamento</button>
                </form>
            </div>
        </section>
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
    <script src="../assets/js/pix.js"></script>
</body>
</html>