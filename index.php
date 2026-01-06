<?php
session_start();

// Jika sudah login, langsung ke dashboard
if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <title>Login | Sistem Informasi Sekolah</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- AdminLTE -->
  <link rel="stylesheet" href="dist/css/adminlte.css">

  <!-- Bootstrap Icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
  >

  <!-- CSS Tambahan -->
  <style>
    body.login-page {
      background: linear-gradient(135deg, #37cf09, #269806);
    }

    .login-box {
      width: 400px;
    }

    .login-logo {
      font-size: 32px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 20px;
    }

    .login-card-body {
      border-radius: 16px;
      padding: 30px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .login-box-msg {
      color: #6c757d;
      margin-bottom: 20px;
    }

    .form-control {
      border-radius: 10px;
    }

    .input-group-text {
      border-radius: 0 10px 10px 0;
    }

    .btn-primary {
      border-radius: 10px;
      font-weight: 600;
      background: linear-gradient(135deg, #0d6efd, #6610f2);
      border: none;
    }

    .btn-primary:hover {
      transform: translateY(-1px);
      box-shadow: 0 10px 20px rgba(13,110,253,0.4);
    }

    .footer-login {
      text-align: center;
      margin-top: 15px;
      font-size: 12px;
      color: #dee2e6;
    }
  </style>
</head>

<body class="login-page">

<div class="login-box">

  <!-- Judul -->
  <div class="login-logo">
    SMKN 3 PAJAJARAN
  </div>

  <!-- Card -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
        Silakan login untuk masuk sistem
      </p>

      <!-- Pesan error -->
      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger text-center">
          Username atau Password salah!
        </div>
      <?php } ?>

      <!-- Form Login -->
      <form action="proses_login.php" method="post" autocomplete="off">

        <div class="input-group mb-3">
          <input
            type="text"
            name="username"
            class="form-control"
            placeholder="Username"
            required
          >
          <div class="input-group-text">
            <span class="bi bi-person-fill"></span>
          </div>
        </div>

        <div class="input-group mb-3">
          <input
            type="password"
            name="password"
            class="form-control"
            placeholder="Password"
            required
          >
          <div class="input-group-text">
            <span class="bi bi-lock-fill"></span>
          </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">
          Login
        </button>

      </form>

    </div>
  </div>

  <!-- Footer -->
  <div class="footer-login">
    © <?= date('Y'); ?> SMKN 3 Pajajaran
  </div>

</div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"></script>

<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

</body>
</html>
