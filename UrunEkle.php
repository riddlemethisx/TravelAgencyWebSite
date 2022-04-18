<?php require "header.php"; ?>






<h2>Admin Paneli</h2>
<table>
    <tr>
        <td style="vertical-align:top;">
            <div class="list-group" style="width:300px; ">
                <a href="YemekPanel.php" class="list-group-item list-group-item-action">Yemek Ürünlerini Düzenle</a>
                <a href="RestoranPanel.php" class="list-group-item list-group-item-action">        Restoranları Düzenle    </a>
                <a href="GiysiPanel.php" class="list-group-item list-group-item-action">Giysi Ürünlerini Düzenle</a>
                <a href="HediyelikEsyaPanel.php" class="list-group-item list-group-item-action">Hediyelik Eşyaları Düzenle</a>
            </div>
<?php require "AdminPanel.php"; ?>






<?php
require_once("DbConnect.php");
$tablo_adi = $_GET["tablo_adi"];
if ($_POST) {
    $urun_adi = $_POST["urun_adi"];
    $urun_fiyati = $_POST["urun_fiyati"];
    $urun_katgeorisi = $_POST["urun_kategorisi"];
    


if(!file_exists("img")){
    mkdir("img");
}
$dizin = "img/";

$yuklenecekResim = $dizin.$_FILES["urun_resmi"]["name"];

if(!move_uploaded_file($_FILES["urun_resmi"]["tmp_name"], $yuklenecekResim))
echo $_FILES["urun_resmi"]["error"];

if($_FILES["urun_resmi"]["name"] == null){
    $yuklenecekResim = "img/placeholder.png";
}



    $query = $db->prepare("INSERT INTO ".$tablo_adi." SET urun_adi = ?,urun_fiyati = ?,urun_kategorisi = ?,urun_resmi = ?");
    $insert = $query->execute(array( $urun_adi, $urun_fiyati, $urun_katgeorisi,$yuklenecekResim));


    if ($insert) { ?>
<div class="alert alert-success" role="alert">Kayıt başarıyla eklendi!<a href="http://localhost/SehirTanitimi/YemekPanel.php" class="alert-link"> AdminPanel'e dön</a>
</div>
<?php
    } else {
        die("Kayıt eklenmedi");
    }
}


?>






<style>
    .formdiv {
        width: 50%;
        height: 50%;
        background-color: #e2e5e5;
        padding: 3%;
        border-radius: 2%;
    }
</style>

<body>
    <div class="formdiv">
        <h3>KAYIT EKLEME </h3>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Kayıt Adı :</label>
                <input name="urun_adi" type="text" class="form-control" placeholder="ürün adı giriniz">
            </div>
            <div class="form-group">
                <label>Kayıt Fiyatı/Açıklaması :</label>
                <input name="urun_fiyati" type="text" class="form-control" placeholder="Ürün fiyatı girin">
            </div>
            <div class="form-group">
                <label>Kayıt Kategorisi :</label>
                <input name="urun_kategorisi" type="text" class="form-control" placeholder="Ürün kategorisini girin">
            </div>

<input type="file" name="urun_resmi" style="margin-bottom: 20px;"/>     

            <button type="submit" class="btn btn-primary">Kaydı Ekle</button>
        </form>
    </div>








<?php require "AdminPanelBitis.php"; ?>
<?php require "footer.php"; ?>