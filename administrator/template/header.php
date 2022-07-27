<!doctype html>
<html lang="en">
  <head>
    <title> SingIn </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php $url="http://".$_SERVER['HTTP_HOST']."/website"?>

  <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="/"> Administrator </a>
          <a class="nav-item nav-link" href="<?php echo $url."/admin.php"; ?>"> Home </a>
          <a class="nav-item nav-link" href="<?php echo $url."/section/productos.php"; ?>"> Gallery </a>
          <a class="nav-item nav-link" href="<?php echo $url."/section/salir.php"; ?>"> Sing Out </a>
          <a class="nav-item nav-link" href="<?php echo $url;?>" > Website </a>
      </div>
  </nav>

<br/> <br/> <br/>

  <div class="container">
    <div class="row">