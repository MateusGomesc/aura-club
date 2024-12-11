<?php
  include "../includes/input.php";
  include __DIR__ . "/../includes/autoLoad.php";
  Security::verifyAuthentication();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php include "../includes/head.php"; ?>
  <title>Recuperar Senha</title>
  <!-- Link para o CSS personalizado -->
  <link rel="stylesheet" href="../assets/css/recuperar.css">
  <!-- Link para o CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include "../includes/header.php"; ?>
  <div class="mt-5 mb-5 border rounded p-4 center-container">
    <div class="row align-items-center justify-content-center">
      <!-- Coluna da logo -->
      <div class="col-md-4 text-center mb-3 mb-md-0">
        <img src="../assets/img/logo-vertical-preto.png" alt="Aura Club" class="img-fluid">
      </div>
      <!-- Coluna com o texto e o formulário -->
      <div class="col-md-8">
        <div class="info-box mb-4 text">
          <p>Se você está tendo dificuldades para acessar sua conta por conta da senha esquecida, siga as etapas simples para recuperar o acesso:</p>
          <ol>
            <li>Digite seu e-mail cadastrado e clique em "Recuperar".</li>
            <li>Verifique seu e-mail para um link de redefinição de senha.</li>
            <li>Siga as instruções no e-mail para criar uma nova senha.</li>
          </ol>
        </div>
        <form class="forgot-password-form">
          <div class="mb-3">
            <?php input('email', 'Seu email:', 'example@gmail.com', 'email'); ?>
          </div>
          <button type="submit" class="btnRed">Recuperar</button>
        </form>
      </div>
    </div>
  </div>
  <?php include "../includes/footer.php"; ?>

  <!-- Script do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <?php include "../includes/scripts.php"; ?>
</body>
</html>
