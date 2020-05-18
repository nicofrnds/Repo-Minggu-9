<?php
include "database.php";
$input = new Databases();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {

    $input->input($_POST['nama'], $_POST['alamat'], $_POST['logo']);
    header("location:tampil.php");
} elseif ($aksi == "hapus") {
    $input->hapus($_GET['id']);
    header("location:tampil.php");
} elseif ($aksi == "update") {
    $input->update($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['logo']);
    header("location:tampil.php");
}
