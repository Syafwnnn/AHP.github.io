<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | Sistem InformasiPemilihan Jurusan</title>
  <link rel="icon" href="DC.png" />
  <link href="assets/css/123-bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/signin.css" rel="stylesheet" />
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <form class="form-signin" action="?m=login" method="post">
      <h2 align="center">Silahkan Masuk</h2>
      <?php if ($_POST) include 'aksi.php'; ?>
      <label for="inputEmail" class="sr-only">Usernames</label>
      <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="user" autofocus />
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" />
      <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
      <button type="button" onclick="location.href='../index.html'" class="btn btn-lg btn-primary btn-block">Kembali</button>
    </form>
  </div>

</html>