<?php
    include __DIR__ . "/../includes/autoLoad.php";
    Security::verifyAuthentication();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include "../includes/head.php"; ?>
    <title>VIP Lounge</title>
    <link rel="stylesheet" href="../assets/css/vip.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <h2 class="titleSection vipColor">VIP Experience</h2>
        <p>Seja bem-vindo (a) <?php if($userObj instanceof User){ echo $userObj->getFirstName(); } ?>!</p>
        <div class="btnContainer">
            <a href="./modificar.php/?boolean=1&id=<?php if($userObj instanceof User){ echo $userObj->getId_user(); } ?>" class="btnRed">Compra</a>
            <a href="./modificar.php/?boolean=0&id=<?php if($userObj instanceof User){ echo $userObj->getId_user(); } ?>" class="btnRed">Cancelamento</a>
        </div>
        <div class="vipBanner">
            <div class="slideVip">
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
            </div>
        </div>
        <div class="photos">
            <div class="bar">openbar</div>
            <div class="food">openfood</div>
            <div class="vendas">pré-vendas</div>
        </div>
        <div class="vipBanner">
            <div class="slideVip">
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
                <span>
                    <h4>VIP</h4>
                    <img src="../assets/img/crown-white.svg" alt="Coroa VIP branca">
                </span>
            </div>
        </div>
        
    </main>
    <?php include "../includes/footer.php"; ?>

    <?php include "../includes/scripts.php"; ?>
    <script src="../assets/js/home.js"></script>
</body>
</html>