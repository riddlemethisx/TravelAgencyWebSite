<?php require "header.php"; ?>


<?php
require_once 'DbConnect.php';




$stmt = $db->query('SELECT * FROM onerisikayet ORDER BY id ASC', PDO::FETCH_ASSOC);
?>

<?php $_POST["dropdownlist"]="Öneri" ?>









<h2>Admin Paneli</h2>
<table>
    <tr>
        <td style="vertical-align:top;">
<div class="list-group" style="width:300px; ">
                <a href="YemekPanel.php" class="list-group-item list-group-item-action ">Yemek Ürünlerini Düzenle</a>
                <a href="RestoranPanel.php" class="list-group-item list-group-item-action">        Restoranları Düzenle    </a>
                <a href="GiysiPanel.php" class="list-group-item list-group-item-action">Giysi Ürünlerini Düzenle</a>
                <a href="HediyelikEsyaPanel.php" class="list-group-item list-group-item-action">Hediyelik Eşyaları Düzenle</a>
                <a href="Oneri.php" class="list-group-item list-group-item-action active">Önerileri Görüntüle</a>
                <a href="Sikayet.php" class="list-group-item list-group-item-action">Şikayetleri Görüntüle</a>


            </div>
        <?php require "AdminPanel.php"; ?>







        

            <h3>Öneriler</h3>
            <br>




            <?php
if($_POST){
    $kategori= $_POST["dropdownlist"];
}


?>






            








            <table class="table" style="border-collapse: collapse; border-radius: 1em; overflow: hidden;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">İsim</th>
                        <th scope="col">Email</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Mesaj</th>
                        <th scope="col">Sil</th>
                    </tr>
                </thead>










                <tbody>
<?php foreach ($stmt as $urun) {?>


<?php if($kategori==$urun['kategori']){ ?>


                        <!-- @* bu kısım kayıt sayısı kadar artacak *@ -->
                        <tr>
                            <th scope="row"><?= $urun['id'] ?></th>
                            <td><?= $urun['isim'] ?></td>
                            <td><?= $urun['email'] ?></td>
                            <td><?= $urun['kategori'] ?></td>
                            <td> <?= $urun['mesaj'] ?> </td>



                            <td>
                                <button type="button" class="btn btn-danger" onclick="location.href='UrunSil.php?id=<?= $urun['id'] ?>&tablo_adi=onerisikayet'">Sil</button>
                            </td>
                        </tr>

                        <?php }} ?>










                </tbody>
            </table>








   
            <?php require "AdminPanelBitis.php"; ?>
<?php require "footer.php"; ?>