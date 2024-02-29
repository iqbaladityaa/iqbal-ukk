<?php
// include database connection file
include_once("../koneksi/koneksi.php");

// Get id from URL to delete that user
$id = $_GET['produk_id'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM produk WHERE produk_id=$id");

// After delete redirect to Home, so that Latest user List will be displayed.
header("Location:index.php?page=stok");
?>