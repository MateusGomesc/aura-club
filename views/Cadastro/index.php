<?php
  include "../includes/input.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include "../includes/head.php"; ?>
    <title>Aura Club - Cadastro</title>
    <!-- Link para o CSS personalizado -->
    <link rel="stylesheet" href="../assets/css/cadastro.css">
    <link rel="stylesheet" href="../assets/css/input.css">
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <!-- Coluna da logo -->
        <div class="logo">
            <img src="../assets/img/logo-vertical-preto.png" alt="Logo Aura Club">
        </div>
        <!-- Coluna do formulário -->
        <form action="" method="post">
            <h2 class="title">Informações pessoais:</h2>
            <?php input('nome', 'Seu nome:', 'João da Silva', 'text'); ?>
            <?php input('email', 'Seu email:', 'example@gmail.com', 'email'); ?>
            <?php input('cpf', 'Seu cpf:', '000000000-00', 'text'); ?>
            <?php input('telefone', 'Seu telefone:', '(00) 90000-0000', 'text'); ?>
            <?php input('data-nascimento', 'Sua data de nascimento:', '', 'date'); ?>
            <?php input('instagram', 'Seu instagram:', '@auraclub', 'text'); ?>
            <h2 class="title">Endereço:</h2>
            <?php input('rua', 'Sua rua:', 'Rua Brasil', 'text'); ?>
            <div class="row">
                <div class="col">
                    <?php input('numero', 'Número:', '203', 'number'); ?>
                </div>
                <div class="col">
                    <?php input('bairro', 'Seu bairro:', 'Centro', 'text'); ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <?php input('cidade', 'Sua cidade:', 'Patrocínio', 'text'); ?>
                </div>
                <div class="col">
                    <?php input('estado', 'Seu estado:', 'Minas Gerais', 'text'); ?>
                </div>
            </div>
            <h2 class="title">Senha:</h2>
            <?php input('senha', 'Crie sua senha:', 'Sua senha', 'password'); ?>
            <?php input('senha-confirme', 'Confirme sua senha:', 'Confirme sua senha', 'password'); ?>
            <button type="submit" class="btnRed">Cadastrar</button>
        </form>
    </main>
    <?php include "../includes/footer.php"; ?>

    <!-- Script do Bootstrap -->
    <?php include "../includes/scripts.php"; ?>
</body>
</html>
