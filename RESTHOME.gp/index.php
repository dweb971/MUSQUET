<?php


?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="nouveau.css">
        <link rel="stylesheet" href="style.css">

<div class="container">
    <div class="row">
        <div class="col-12">
        <header>
  <div class="ico"><i>icon1</i><i>icon2</i></div>
  <div class="navlinks">
    <a href="recette.php" title="recettes"  class="Les recettes">Recettes</a>
    <div>
      <a href="menu.php" title="menu"  class="mnu">Menus</a>
      <h1 class="navlinks h1">RESTHOME</h1>
    </div>
    <a>Recherche</a>
  </div>
</header>


<div class="banniere">
  <h2>
    MENUS
  </h2>
  <div>
    <div class="left">
      <div class="triangle-topright"></div>
      <div class="triangle-bottomright"></div>
      <div class="Wtriangle-topright"></div>
    </div>
    <div class="dotted"></div>
    <div class="right">
      <div class="triangle-topleft"></div>
      <div class="triangle-bottomleft"></div>
      <div class="Wtriangle-topleft"></div>
    </div>
  </div>
</div>
<?php 
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('America/Guadeloupe');
//echo utf8_encode(strftime('%A %d %B %Y'));
//echo date('m-d-Y', strtotime('+15 days'));

//echo date('l d F Y');  // jeudi 22 avril 2021

//echo date('l d F Y'); 
// echo date('d-m-Y', strtotime('+7 days'));



for($i=0; $i < 6; $i++){
?>
<div class="container">
      <div class="row">
        <div class="col-8">
            <a href="menu.php"> 
              <button class="btnptj" type="button" class="btn btn-primary btn-lg btn-block">
              <?php echo date('l d F Y', strtotime("+ $i days"));    ?>               

            </button></a>
          
    
        </div>
        <div class="col-4">
          
        </div>
      </div>
    </div>
<?php
}



?>
    






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
