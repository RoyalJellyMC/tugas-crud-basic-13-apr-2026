<?php
require "function.php";
$id = $_GET["id"];
$hapus = hapus($id);
if($hapus>0){
    header("Location:beranda.php");
}
?>