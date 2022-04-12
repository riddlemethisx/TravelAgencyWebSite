<?php require "header.php"; ?>


<?php 
$id = $_GET["id"];
$urun_adi = $_GET["ad"];
$urun_fiyati =$_GET["fiyat"];
$urun_kategorisi=$_GET["kategori"];
$urun_resmi = $_GET["resim"];

?>


<table style=" width:100%;">
    <tr>
        <td>


<div style="width:400px; height:400px; "  >
<img src=<?= $urun_resmi ?> class="img-thumbnail h-100"    width="400px" height="400px">

        </div>





        </td>
        <td style=" vertical-align:top; padding-left:30px; padding-top:30px;  width:100%;">




<table style=" width:100%;">
  <tr>
    <td>



    <h3> <?= $urun_adi ?></h3>
    <div>
Kategori: <?= $urun_kategorisi ?>
<?php  if($urun_kategorisi!="restoran"){ ?>
<br><br>Fiyat:<br>  



      <font style="font-size:xx-large; " >  <?= $urun_fiyati ?>,00 ₺</font>
</div>

<br><br><br>

<br>
<script>
var azaltBtn = document.getElementById("azalt");
var arttirBtn =document.getElementById("arttir");
var sayi=1;

azaltBtn.onclick=function(){
sayi--;	
}
arttirBtn.onclick=function(){
sayi++;	
}
</script>
<button type="button" class="btn btn-light" id="azalt">-
</button>
<script>document.write(sayi);</script>
<button type="button" class="btn btn-light" id="arttir">+ 
</button>


&nbsp;

<button type="button" class="btn btn-success" >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>
SİPARİŞ VER</button>




<?php }?>







<br><br>

<button type="button" class="btn btn-light">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>
</button>


<button type="button" class="btn btn-light">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
</svg>
</button>


<button type="button" class="btn btn-light">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg>
</button>




    </td >
    <td style="text-align: right; vertical-align:top;  ">
    <?php require "Yildiz.php"; ?>

    </td>
  </tr>
</table>





























        </td>
    </tr>
</table>





<br>
<br>
<div>
  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet error cupiditate nihil, vitae, soluta ipsa cumque at, labore explicabo ex molestiae numquam delectus ab temporibus expedita odit dignissimos ducimus? Dolores.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ratione fugiat dolorem aliquam pariatur? Minima obcaecati veritatis reiciendis consequatur maxime sapiente iusto, asperiores harum beatae libero consequuntur excepturi suscipit aspernatur.

</div>
<br> 





<?php require "footer.php"; ?>