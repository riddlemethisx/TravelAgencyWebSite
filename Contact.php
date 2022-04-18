<?php require 'header.php'; ?>
















<!--Section: Contact v.2-->
<div style="display:flex; justify-content:center;align-items: center;">
<section class="mb-4" style="width: 800px;">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">İletişim</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Öneri ve Şikayetlerinizi bu sayfadan bize gönderebilirsiniz</p>










    <?php 
require_once("DbConnect.php");
if ($_POST) {
    $isim = $_POST["name"];
    $email = $_POST["email"];
    $kategori = $_POST["dropdownlist"];
    $mesaj = $_POST["message"];





$query = $db->prepare("INSERT INTO onerisikayet SET isim = ?,email = ?,kategori = ?,mesaj = ?");
$insert = $query->execute(array( $isim, $email, $kategori,$mesaj));
if ($insert) { ?>

<div class="alert alert-success" role="alert">Öneri/Şikayetiniz Gönderildi!
</div>


<?php
} else {
    die("Kayıt eklenmedi");
}
}
?>







    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form"  method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">İsim</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">


<select name="dropdownlist">  
  <option value="Öneri">Öneri</option>
  <option value="Şikayet">Şikayet</option>  
</select> 
<br>
<label for="message">Konu</label>

<br>
                    

                    </div>
                </div>


               


                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Öneri veya Şikayetiniz</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                <button type="submit" class="btn btn-primary">Gönder</button>

            </form>


            <div class="status"></div>
        </div>















        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>İstanbul/Kadıköy, 34012, TR</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p> + 90 234 567 88</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@istanbultravel.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
</div>
<!--Section: Contact v.2-->




<?php require 'footer.php'; ?>
