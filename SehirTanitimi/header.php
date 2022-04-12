<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <link rel="stylesheet" type="text/css" href="css/responsive.css" />


  <!-- yıldız sisteminin js'leri -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/661fc846fc.js" crossorigin="anonymous"></script>





</head>
<body>


<?php $siteAdi ="İstanbul Travel"; 
session_start();

?>








    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed; z-index:5; width:100%;  ">

        <a class="navbar-brand" href="index.php"><?=$siteAdi?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">








                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Turizm
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="SehrinTarihi.php">Şehrin Tarihi</a>
                        <a class="dropdown-item" href="PiknikDogaYerleri.php">Doğa ve Piknik Yerleri</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="UrunListeleme.php?tablo_adi=urunler">Yemekler</a>
                        <a class="dropdown-item" href="UrunListeleme.php?tablo_adi=restoranlar">Restoranlar</a>
                        <a class="dropdown-item" href="UrunListeleme.php?tablo_adi=giysiler">Yerel Giysiler</a>
                        <a class="dropdown-item" href="UrunListeleme.php?tablo_adi=hediyelikesyalar">Hediyelik Eşyalar</a>
                    </div>
                </li>




                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Business
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Sanayi.php">Sanayi</a>
                        <a class="dropdown-item" href="UnluInsanlar.php">Başarılı İnsanlar</a>
                        </div>
                </li>




                <li class="nav-item active">
                    <a class="nav-link" href="About.php">Hakkımızda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Contact.php">İletişim <span class="sr-only">(current)</span></a>
                </li>

            </ul>

            <!-- @* search inputu *@ -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-default my-2 my-sm-0" type="submit">Ara</button>



<!-- bu kısım eğer giriş yapılmamışsa görünecek eğer giriş yapılmışsa admin paneli yazacak -->
<?php  if($_SESSION["girisYapildiMi"]==false || $_SESSION["girisYapildiMi"]==null){ ?>
    <a class="nav-link" href="SignIn.php">Admin Giriş <span class="sr-only">(current)</span></a>
    <?php } else { ?>
            <a class="nav-link" href="YemekPanel.php">Admin Paneli <span class="sr-only">(current)</span></a>
            <?php } ?>


        </form>

        </div>
    </nav>







    <div class="container body-content" style="padding-top:80px; padding-bottom:30px; align-content:center; vertical-align:central;">










