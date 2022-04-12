<?php
require_once("DbConnect.php");
if ($_GET) {
    $tablo_adi = $_GET["tablo_adi"];

    $id = $_GET["id"];
    $delete = $db->query("DELETE FROM ".$tablo_adi." WHERE id='$id'");
    if ($delete) {
        header('Location: http://localhost/SehirTanitimi/YemekPanel.php');
    } 
    else {
        die("Ürün silinemedi");
    }
}
