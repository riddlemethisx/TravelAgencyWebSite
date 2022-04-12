<?php require "header.php"; ?>


<?php
require_once 'DbConnect.php';




$stmt = $db->query('SELECT * FROM giysiler ORDER BY id ASC', PDO::FETCH_ASSOC);
?>











<h2>Admin Paneli</h2>
<table>
    <tr>
        <td style="vertical-align:top;">
<div class="list-group" style="width:300px; ">
                <a href="YemekPanel.php" class="list-group-item list-group-item-action ">Yemek Ürünlerini Düzenle</a>
                <a href="RestoranPanel.php" class="list-group-item list-group-item-action">        Restoranları Düzenle    </a>
                <a href="GiysiPanel.php" class="list-group-item list-group-item-action active">Giysi Ürünlerini Düzenle</a>
                <a href="HediyelikEsyaPanel.php" class="list-group-item list-group-item-action">Hediyelik Eşyaları Düzenle</a>
                <a href="Oneri.php" class="list-group-item list-group-item-action ">Önerileri Görüntüle</a>
                <a href="Sikayet.php" class="list-group-item list-group-item-action ">Şikayetleri Görüntüle</a>
            </div>
        <?php require "AdminPanel.php"; ?>







        

            <h3>Ürün Ekleme</h3>










                <button type="submit" class="btn btn-primary" onclick="window.location.href='UrunEkle.php?tablo_adi=giysiler'" style="margin-bottom: 20px;">Ürün Ekle</button>





            








            <table class="table" style="border-collapse: collapse; border-radius: 1em; overflow: hidden;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Restoran Adı</th>
                        <th scope="col">Açıklaması</th>
                        <th scope="col">Kategorisi</th>
                        <th scope="col">Resmi</th>
                        <th scope="col">Düzenle</th>
                        <th scope="col">Sil</th>
                    </tr>
                </thead>










                <tbody>
<?php foreach ($stmt as $urun) {?>





                        <!-- @* bu kısım kayıt sayısı kadar artacak *@ -->
                        <tr>
                            <th scope="row"><?= $urun['id'] ?></th>
                            
                            <td><?= $urun['urun_adi'] ?></td>
            <td><?= $urun['urun_fiyati'] ?></td>
            <td><?= $urun['urun_kategorisi'] ?></td>
            <td> <img width="40px" height="40px" src="<?= $urun['urun_resmi'] ?>" ></td>
                            <!-- <td><?= $urun[0] ?> </td>
                            <td> <?= $urun[1] ?> </td>
                            <td><?= $urun[2] ?></td> -->



                            <td>
                                <button type="button" class="btn btn-secondary" onclick="location.href='UrunGuncelle.php?id=<?= $urun['id'] ?>&tablo_adi=giysiler'">Düzenle</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" onclick="location.href='UrunSil.php?id=<?= $urun['id'] ?>&tablo_adi=giysiler'">Sil</button>
                            </td>
                        </tr>

                        <?php } ?>










                </tbody>
            </table>








   
            <?php require "AdminPanelBitis.php"; ?>
<?php require "footer.php"; ?>