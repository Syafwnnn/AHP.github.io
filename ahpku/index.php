<?php
include 'functions.php';
// if (empty($_SESSION['user']))
//   header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="DC.png" />

  <title>Sistem Informasi Pemilihan Jurusan</title>
  <link href="assets/css/united-bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/general.css" rel="stylesheet" />
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/highcharts.js"></script>
  <script src="assets/js/highcharts-3d.js"></script>
  <script src="assets/js/exporting.js"></script>
</head>

<body>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" >Sistem Informasi Pemilihan Jurusan</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
       
        <div class="navbar-text"></div>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
  <div class="container hentry">
    <?php
    if (file_exists($mod . '.php'))
      include $mod . '.php';
    else
      include 'home.php';
    ?>
  </div>
  <footer class="footer bg-primary">
    <div class="container">
      <p>Copyright &copy; <?= date('Y') ?> Dichi Ade Saputra <em class="pull-right">SKRIPSI</em></p>
    </div>
  </footer>
</body>

</html>