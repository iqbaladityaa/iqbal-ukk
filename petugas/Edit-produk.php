<?php

include_once("../koneksi/koneksi.php");

if (isset($_POST['update'])) {
    $id = $_GET['produk_id'];

    $namaproduk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $result = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$namaproduk', harga='$harga', stok='$stok' WHERE produk_id=$id");

    header("Location: index.php?page=stok");
    echo "<script>alert('Berhasil')</script>";
}

$id = $_GET['produk_id'];

$result1 = mysqli_query($koneksi, "SELECT * FROM produk WHERE produk_id=$id");

while ($barang_data = mysqli_fetch_array($result1)) {
    $NamaProduk = $barang_data['nama_produk'];
    $Harga = $barang_data['harga'];
    $Stok = $barang_data['stok'];
}
?>

<div class="row well">
    <div class="col-md-4">
        <div class="card well">
            <div class="card-header">
                <h3 class="">Edit barang</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">Nama Produk:</label>
                        <input type="text" class="form-control" id="nama_produk" value="<?php echo $NamaProduk; ?>" placeholder="Masukkan Nama" name="nama_produk">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga:</label>
                        <input type="text" class="form-control" id="harga" value="<?php echo $Harga; ?>" placeholder="Masukkan harga" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="Stok" class="form-label">Stok:</label>
                        <input type="text" class="form-control" id="stok" value="<?php echo $Stok; ?>" placeholder="Masukkan stok" name="stok">
                    </div>
                   

                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div> 
    </div>
</div>