
            <button type="button" class="btn btn-outline-danger" id="button1" name="button1" style="margin-top: 20px;" onclick=<?php Cikis(); ?>    >Çıkış Yap</button>




<!-- sayfadaki her hangi bir butona tıklayınca çıkış yapıyor -->
<?php 
function Cikis() {
    $_SESSION["girisYapildiMi"] = false;
}

// if(isset($_POST['button'] ))   
//         $_SESSION["girisYapildiMi"] = false;


?>




<script>
    var btn = document.getElementById("button1");
    btn.onclick=function(){
        window.location.href = "http://localhost/SehirTanitimi/index.php";
	}
</script>






            </td>
        <td width="100%" style="padding-left:30px; vertical-align:top;">



