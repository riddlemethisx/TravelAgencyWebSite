<?php require 'header.php'; ?>
<?php
require_once 'DbConnect.php';
$tablo_adi = $_GET["tablo_adi"];


$stmt = $db->query("SELECT * FROM ".$tablo_adi." ORDER BY id ASC", PDO::FETCH_ASSOC);
?>






<div class="card-deck "  >




<?php foreach ($stmt as $urun) { ?>
<!-- @* bu kısım kayıt sayısı kadar artacak *@ -->


<div class="  col-12 col-md-4 col-lg-3"  >
<div class="card" style="margin-top:30px; " >
<div style="  width: 100%; height:100%; background-color:#D6DBDE; "   >
  <img style="object-fit: cover;" src="<?= $urun['urun_resmi'] ?>"  class="card-img-top h-100" alt="...">
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $urun['urun_adi'] ?></h5>
    <p class="card-text">
        <!-- içerik kısmı -->



      <?php  if($tablo_adi!="restoranlar"){ ?>
Ürun ID: <?= $urun['id'] ?>
<br>
Ürün Fiyatı: <?= $urun['urun_fiyati'] ?>,00₺
<br>
Ürün Kategorisi: <?= $urun['urun_kategorisi'] ?>





<?php }else{ ?>
  <!-- ID: <?= $urun['id'] ?>
<br> -->
Açıklama: <?= $urun['urun_fiyati'] ?>
<br>
Kategori: <?= $urun['urun_kategorisi'] ?>
<?php } ?>



    </p>
    <!-- bu kısım henüz bitmedi -->
    <a href="UrunSayfa.php?ad=<?= $urun['urun_adi'] ?>&id=<?= $urun['id'] ?>&fiyat=<?= $urun['urun_fiyati'] ?>&kategori=<?= $urun['urun_kategorisi'] ?>&resim=<?= $urun['urun_resmi'] ?>"  class="btn btn-primary">ÜRÜNE GİT</a> 
  </div>
</div>
</div>
<?php } ?>
</div>















<?php require 'footer.php'; ?>
