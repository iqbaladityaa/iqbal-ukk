<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-bpdy">
                <h4 class="card-title">Daftar Barang</h4>
                <p class="card-description">
                <!-- Add class <code>.table</code> -->
                     <a href="?page=tambah-brg" title="Tambah Produk"
                        class;="btn btn-primary btn-icon-split btn-sm">
                            <span class="icon text-white-50"><i 
class="fas-plus"></i></span>
                            <span class="text">"Tambah Barang"</span>
                     </a>     
                </p>   

                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%"
cellspacing="0">
                            <thead>  
                                <tr> 
                                    <th>No</th>
                                    <th>Foto Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Terjual</th>
                                    <th>Opsi</th>
                                </tr>   
                            </thead>
                            <tbody>
                            <?php
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM 
produk");
                                while ($data= $sql->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo "<img
src='../foto/".$data['Foto Produk']."' width='70' height='70'></td>
                                <td><?php echo $data['nama_produk']?></td>
                                <td>Rp.<?php echo number_format
($data['Harga'])?></td>
                                <td><?php echo $data['stok']?></td>
                                <td><?php echo $data['terjual']?></td>
                                <td align="center" width="12%"><a
href="?page=edit-brg&Produk_id=<?= $data['Produk_id']; ?>""badge badge-
primary p-2 edit-data" title="Edit"><i class="">Edit</i></a> | <a
href="?page=hapus-brg&Produk_id=<?= $data['produk_id']; ?>""class="badge badge-
danger p-2 delete-data" title='Delete'><i class="">Hapus</i></a> </td>
                                 <td></td>
                                 <td>
                                 
                                 </td>
                            </tr>
                            <?php } ?>

                            </body>
                        </table>
                    </div>
                
                </div>
            </div>
        </div>
    </div>