<?php 
  

  if(!isset($_SESSION['login'])){

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">

    <!-- My Css -->


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/539ff654ff.js" crossorigin="anonymous"></script>

    <title>SunBook</title>
  </head>
  <body class="mt-5">
    <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color:#617129">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" >
          <a class="navbar-brand" href="<?= BASEURL;?>/home/"><img src="<?= BASEURL;?>/img/sblogo.png" alt=""></a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL;?>/home/belanja"  style="color: white;">Belanja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL;?>/home/login" style="color: white;">Login</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
  <?php }else{?>
    <!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">

    <!-- My Css -->
    <style>
      section{
        min-height: 420px;
      }
    </style>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/539ff654ff.js" crossorigin="anonymous"></script>

    <title>SunBook</title>
  </head>
  <body class="mt-5">
    <nav class="navbar fixed-top navbar-expand-md navbar-light" style="background-color:#617129">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" >
          <a class="navbar-brand" href="<?= BASEURL;?>/home/"><img src="<?= BASEURL;?>/img/sblogo.png" alt=""></a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL;?>/home/belanja"  style="color: white;">Belanja</a>
            </li>
            <li class="nav-item dropdown" style="color: white;">
              <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $_SESSION['username']?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#617129">
                <a class="dropdown-item" style="color: white;"href="#">Profil</a>
                <a class="dropdown-item" style="color: white;"href="<?= BASEURL;?>/home/logout">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <?php }?>