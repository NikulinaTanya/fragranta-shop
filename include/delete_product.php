<?php
include($_SERVER['DOCUMENT_ROOT']."/generator/functions.php");
if(isset($_SESSION['admin_online']) && $_SESSION['admin_online'] == 1){
    $id = $_POST['id'];

    $product = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt"));
    $product[$id] = '';
    file_put_contents($_SERVER['DOCUMENT_ROOT']."/generator/db/productdb.txt", serialize($product));
}
header('location: /all');
?>