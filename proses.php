<?php
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == 'tambah'){

    $db->input($_POST['nama'],$_POST['alamat'],$_POST['usia']);
    header("location:tampil.php");

}else if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:tampil.php");
    
}else if($aksi == "update"){
    $db->edit($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
    header("location:tampil.php");
}
?>