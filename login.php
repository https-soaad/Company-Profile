<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
<section class="forms-section">
  <h1 class="section-title">Bienvenue chez SEIPIA !</h1>

  <?php
  session_start();
  if (isset($_SESSION['error'])) {
      echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
      unset($_SESSION['error']);
  }
  if (isset($_SESSION['success'])) {
      echo "<div class='alert alert-success'>" . $_SESSION['success'] . "</div>";
      unset($_SESSION['success']);
  }
  ?>

  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Se connecter
        <span class="underline"></span>
      </button>
      <form action="login_process.php" method="POST" class="form form-login">
        <fieldset>
          <legend>Veuillez saisir votre email et votre mot de passe pour se connecter.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input id="login-email" type="email" name="email" required>
          </div>
          <div class="input-block">
            <label for="login-password">Le mot de passe</label>
            <input id="login-password" type="password" name="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        S'inscrire
        <span class="underline"></span>
      </button>
      <form class="form form-signup" action="register_process.php" method="POST">
        <fieldset>
          <legend>Veuillez saisir votre e-mail, votre mot de passe et le confirmer pour s'inscrire.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" name="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Mot de passe</label>
            <input id="signup-password" type="password" name="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirmer mot de passe</label>
            <input id="signup-password-confirm" type="password" name="confirm_password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
      </form>
    </div>
  </div>
</section>

<script>
    const switchers = [...document.querySelectorAll('.switcher')]

    switchers.forEach(item => {
        item.addEventListener('click', function() {
            switchers.forEach(item => item.parentElement.classList.remove('is-active'))
            this.parentElement.classList.add('is-active')
        })
    })
</script>

<style>
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }
</style>

</body>
</html>