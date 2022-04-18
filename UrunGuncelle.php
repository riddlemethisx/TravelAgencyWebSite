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

$id = $_GET["id"];
$mevcutVeri = $db->query("SELECT * FROM ".$tablo_adi." WHERE id='$id' ")->fetch(PDO::FETCH_ASSOC);
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
        $stmt = $db->query("UPDATE ".$tablo_adi." SET urun_adi = '$urun_adi', urun_fiyati = '$urun_fiyati' ,urun_kategorisi='$urun_katgeorisi' WHERE id = $id");


    }else{
        $stmt = $db->query("UPDATE ".$tablo_adi." SET urun_adi = '$urun_adi', urun_fiyati = '$urun_fiyati' ,urun_kategorisi='$urun_katgeorisi', urun_resmi='$yuklenecekResim' WHERE id = $id");

    }




    if ($stmt) { ?>
<div class="alert alert-success" role="alert">  Kayıt başarıyla güncellendi!<a href="http://localhost/SehirTanitimi/YemekPanel.php" class="alert-link"> AdminPanel'e dön</a>
</div>

    <?php    
    } else {
        die("Ürün güncellenemedi");
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
    <div class="formdiv" style="margin-top: 20px;">
        <h3>KAYIT GÜNCELLEME </h3>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Kayıt Adı :</label>
                <input name="urun_adi" type="text" class="form-control" value="<?= $mevcutVeri["urun_adi"] ?>">
            </div>
            <div class="form-group">
                <label>Kayıt Fiyatı/Açıklaması :</label>
                <input name="urun_fiyati" type="text" class="form-control" value="<?= $mevcutVeri["urun_fiyati"] ?>">
            </div>
            <div class="form-group">
                <label>Kayıt Kategorisi :</label>
                <input name="urun_kategorisi" type="text" class="form-control" value="<?= $mevcutVeri["urun_kategorisi"] ?>">
            </div>

            <input type="file" name="urun_resmi" style="margin-bottom: 20px;"/>     


            <button type=" submit" class="btn btn-primary">Kaydı Güncelle</button>
        </form>
    </div>


    <?php require "AdminPanelBitis.php"; ?>
<?php require "footer.php"; ?>