<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon Blog</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'style.css' ?>">
</head>
<body>
<?php require('blog/menu.php') ?>
<div class="container">
    <?= $content ?>
</div>
</body>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('#carouselExampleIndicators').find('.carousel-item').first().addClass('active');
});
</script>
<footer class="bg-light mt-5">
<div class="col-lg-12 col-md-12 col-sm-12 mt-5 footer">
<p>Toutes les droits sont résérver 2021 <i class="far fa-copyright"></i></p>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4">
  <a href="#">Contactez-nous</a>
  
</div>
<div class="col-lg-4 col-md-4 col-sm-4">
  <a href="#">Politique de confidentialité</a>
  
</div>
<div class="col-lg-4 col-md-4 col-sm-4">
  <a href="#">Mentions légales</a>
 
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 social mt-5">

<h6>suivez nous sur les réseaux sociaux</h6>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4">
<img src="http://localhost/mvc/ressources/file/logo.png" class="logos" alt="">
</div>
<div class="col-lg-1 col-md-1 col-sm-1">
<i class="fab fa-facebook"></i>
</div>
<div class="col-lg-1 col-md-1 col-sm-1">
<i class="fab fa-instagram"></i>
</div>
<div class="col-lg-1 col-md-1 col-sm-1">
<i class="fab fa-linkedin"></i>
</div>
<div class="col-lg-1 col-md-1 col-sm-1">
<i class="fab fa-twitter"></i>
</div>
<div class="col-lg-4 col-md-4 col-sm-4"></div>
</div>
</div>
</footer>
</html>