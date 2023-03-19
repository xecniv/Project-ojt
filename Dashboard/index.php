<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PROJECT</title>
  <!--externalcss-->
	<link rel="stylesheet" href="style/style.css">
	<!-- bootstrap -->
    <link rel ="stylesheet" href="bootstrap-5.1.3/css/bootstrap.min.css">
    <link rel ="stylesheet" href="bootstrap-5.1.3/css/all.min.css"> <!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="btn-group dropend">
      <button  type="button" class="btn btn-lg dropdown-toggle dropdown-toggle" id="dropright" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="visually-hidden">Toggle Dropright</span>
      <img src="img/ems.png" width="60" class="disabled"> Dashboard
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <button class="dropdown-item" id="d1" type="button">Dashboard 1</button>
    <div class="dropdown-divider"></div>
    <button class="dropdown-item" type="button">Dashboard 2</button>
      </div>
    </div>
</body>
</html>
