<?php
if(isset($_POST['search'])){
 $search = $_POST ['search'];
 $sql = $koneksi->query("SELECT * FROM produk WHERE NamaProduk LIKE '%$search%'");
 } else 
    $sql = $koneksi->query("SELECT * FROM produk ")
 
 ?>
<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Barang</h4>
                    <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                        <a href="?page=tambah-barang" title="Tambah Produk" 
                            class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                                <span class="text">Tambah Produk</span>
                        </a>
                    </p>
                    <form class="d-flex" action="?page=cari-barang" method="post">
                        <input class="from-control me-2" type="search" placeholder="cari menu..."aria-label="seacrh" name="search">
                        <button class="btn btn-outline-light" type="sumbit">cari</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto </th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Terjual</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $nama = $_POST['search'];
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%$nama%'");
                                while ($data= $sql->fetch_assoc()) {
                                    
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo "<img src='../foto/".$data['foto']."' width='70' height='70'>"; ?></td>
                                <td><?php echo $data['NamaProduk']?></td>
                                <td><?php echo number_format($data['Harga'])?></td>
                                <td><?php echo $data['Stok']?></td>
                                <td><?php echo $data['Terjual']?></td>
                                <td><a href="?page=edit-brg&produk_id=<?= $data['produk_id']; ?>" class="badge badge-primary p-1" title="Edit"><i class="">Edit</i></a> |
                                    <a href="?page=hapus-brg&produk_id=<?= $data['produk_id']; ?>" class="badge badge-danger p-2 delete-data" title='Delete'><i class="">Hapus</i></a></td>
                                   
                            </tr>
                            <?php } ?>
                        
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>