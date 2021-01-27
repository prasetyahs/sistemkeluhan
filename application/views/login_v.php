<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style-login.css">
</head>

<body id="page-top">
  <div class="login-page">
    <div class="form">
      <h3>Masuk Dengan Akun Anda</h3>
      <div role="alert" style="color:red">
        <?= $this->session->flashdata("message")  != null ? "*" . $this->session->flashdata("message") : "" ?>
      </div>
      &nbsp;
      <form class="login-form" class="register-form" method="post" action="login/auth">
        <input type="text" placeholder="username" name="username" />
        <input type="password" placeholder="password" name="password" />
        <button type="submit">login</button>
        <p class="message">Belum Punya Akun ? <a href="register">Daftar Disini</a></p>
      </form>
    </div>
  </div>
</body>
<script type="text/javascript">
  $('.message a').click(function() {
    $('form').animate({
      height: "toggle",
      opacity: "toggle"
    }, "slow");
  });
</script>

</html>