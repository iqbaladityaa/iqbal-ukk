<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Barang</h4>
                <p class="card-description">
                    <a href="?page=tambahbarang" title="TambahProduk" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                        <span class="text">Tambah Produk</span>
                    </a>
                </p>

                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Terjual</th>
                                <th>pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM produk");
                                while ($data= $sql->fetch_assoc()) {                                    
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo "<img src='../foto/".$data['foto']."' width='70' height='70'>"; ?></td>
                                <td><?php echo $data['nama_produk']?></td>
                                <td>Rp.<?php echo $data['harga']?></td>
                                <td><?php echo $data['stok']?></td>
                                <td><?php echo $data['terjual']?></td>
                                <td><a href="?page=edit-produk&produk_id=<?php echo $data['produk_id']?>" 
                                       class="btn btn-primary btn-icon-split btn-sm">
                                        <span class="icon text-white-50"><i class="fas fa-edit"></i></span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <a href="?page=hapus-produk&produk_id=<?php echo $data['produk_id']?>" 
                                       class="btn btn-danger btn-icon-split btn-sm">
                                        <span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                        <span class="text">Delete</span>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
