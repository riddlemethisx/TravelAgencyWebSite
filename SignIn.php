
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>SignIn</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





    <style>
        html, body {
            width: 100%;
            height: 100%;
            position: relative;
        }
    </style>

</head>









<body>

    <button type="button" class="btn btn-primary" style="margin: 20px; " onclick="window.location.href='index.php'"><strong><</strong></button>

    <!-- @* div ortalama işlemi bu şekilde yapılır. ortalanmak istenen div'in dışına kapsayıcı olarak bir div daha verilir. gerekli cssler kapsayıcıya verilir.' *@
    @*  ayrıca bunların dışında head'in içinde de birtakım cssler var! *@
    @* top: 50%; left: 50%; transform: translate(-50%, -50%); kısmı şunu belirtiyor üstten ve soldan 50% ittir. ama alttan ve sağdan da 50% ittir. ve bu şekilde ortala demektir. *@ -->
    <div style="width: 400px; height: 300px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); ">
        <h3 style="margin-bottom:20px;">Giriş</h3>
        <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email Adresi</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Şifre</label>
                <input name="sifre" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>
    </div>




<?php
if($_POST){
    $email = $_POST["email"];
    $sifre = $_POST["sifre"];
    session_start();
    $_SESSION["girisYapildiMi"]=false;
    if($email == "admin@hotmail.com" && $sifre="admin"){
        $_SESSION["girisYapildiMi"]=true;
    header('Location: http://localhost/SehirTanitimi/YemekPanel.php');
    
}

}

?>





</body>
</html>
