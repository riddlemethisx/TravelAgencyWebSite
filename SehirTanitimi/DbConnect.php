<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=sehirtanitimidb", "root", "");
} catch (PDOException $e) {

    print $e->getMessage();
}
