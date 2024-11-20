<?php
  include "../includes/input.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php include "../includes/head.php"; ?>
  <title>Login</title>
  <!-- Link para o CSS personalizado -->
  <link rel="stylesheet" href="../assets/css/login.css">
  <link rel="stylesheet" href="../assets/css/input.css">
  <!-- Link para o CSS do Bootstrap -->
</head>

<body>
  <?php include "../includes/header.php"; ?>
  <div class="m-5">
    <div class="row align-items-center justify-content-center">
      <!-- Coluna que envolve tudo com moldura -->
      <div class="col-md-8 border rounded p-4 login-wrapper center-container">
        <div class="row align-items-center justify-content-center">
          <!-- Coluna da logo -->
          <div class="col-md-4 text-center mb-3 mb-md-0">
            <img src="../assets/img/logo-vertical-preto.png" alt="Aura Club" class="img-fluid">
          </div>
          <!-- Coluna do formulário de login -->
          <div class="col-md-8">
            <form class="login-form">
              <div class="mb-3">
                <?php input('email', 'Seu email:', 'example@gmail.com', 'email'); ?>
              </div>

              <div class="mb-3">
                <?php input('senha', 'Sua senha:', 'Senha', 'password'); ?>
              </div>

              <div class="form-options d-flex flex-wrap justify-content-between align-items-center mb-3 w-100">
                <label class="checkbox-label">
                  <input type="checkbox"> Mostrar senha
                </label>
                <a href="../Recuperar/" class="forgotPassword">Esqueceu sua senha?</a>
              </div>

              <div class="button-group d-flex flex-wrap gap-3 justify-content-start">
                <button type="submit" class="btnRed">Login</button>
                <button type="button" class="btnGrey" onclick="window.location.href='../Cadastro'">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../includes/footer.php"; ?>

  <!-- Script do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <?php include "../includes/scripts.php"; ?>
  <script src="../assets/js/login.js"></script>
</body>

</html>