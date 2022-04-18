<?php require "header.php"; 


echo $_SESSION["girisYapildiMi"];
?>





<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-bottom:20px;">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://unsplash.it/1280/720" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>lorem ipsum</h5>
                <p>İn to with to deeds like sins basked to earthly</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://unsplash.it/1280/720" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>lorem ipsum</h5>
                <p>İn to with to deeds like sins basked to earthly</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://unsplash.it/1280/720" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>lorem ipsum</h5>
                <p>İn to with to deeds like sins basked to earthly</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>















<!-- <div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="https://unsplash.it/500" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            <button type="button" class="btn btn-dark" style="float:right;">ÜRÜNE GİT</button>

        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://unsplash.it/500" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            <button type="button" class="btn btn-dark" style="float:right;">ÜRÜNE GİT</button>

        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="https://unsplash.it/500" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">

            <small class="text-muted">Last updated 3 mins ago</small>
            <button type="button" class="btn btn-dark" style="float:right;">ÜRÜNE GİT</button>

        </div>
    </div>
</div> -->













<h3 style="margin-bottom:20px;">Popüler Restoranlar</h3>



<?php
require_once 'DbConnect.php';
$stmt = $db->query("SELECT * FROM restoranlar ORDER BY id ASC", PDO::FETCH_ASSOC);
?>
<?php $i=0; ?>
<div class="card-deck "  >
<?php foreach ($stmt as $urun) {?>

<?php  if($i==4){
            break;  } ?>

<div class="  col-12 col-md-4 col-lg-3"  >
<div class="card" style="margin-top:30px; " >
<div style="  width: 100%; height:100%; background-color:#D6DBDE; "   >
  <img style="object-fit: cover;" src="<?= $urun['urun_resmi'] ?>"  class="card-img-top h-100" alt="...">
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $urun['urun_adi'] ?></h5>
    <p class="card-text">
        <!-- içerik kısmı -->
<!-- Ürun ID: <?= $urun['id'] ?>
<br> -->
Açıklama: <?= $urun['urun_fiyati'] ?>
<br>
Kategori: <?= $urun['urun_kategorisi'] ?>
    </p>
    <!-- bu kısım henüz bitmedi -->
    <a href="UrunSayfa.php?ad=<?= $urun['urun_adi'] ?>&id=<?= $urun['id'] ?>&fiyat=<?= $urun['urun_fiyati'] ?>&kategori=<?= $urun['urun_kategorisi'] ?>&resim=<?= $urun['urun_resmi'] ?>"  class="btn btn-primary">ÜRÜNE GİT</a> 
  </div>
</div>
</div>

<?php $i++; ?>
<?php  } ?>
</div>












    
<?php require "footer.php"; ?>