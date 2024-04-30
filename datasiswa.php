
<div class = "col-md-12" style = "text-align:right;"><a href="index.php?p=tambah_barang">  <button type="button" class="btn btn-primary"> <i class="fa-solid fa-user-plus"></i> Tambah Siswa</button></a></div>

<div class="shadow-none p-2 mt-2 bg-secondary text-light rounded">Data Siswa UP SMK</div>
    <div class="table-responsive shadow p-3 mb-5 bg-body rounded">
    
    <table id="tabelsiswa" class="table table-hover">
            <thead>
            <tr >
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col" style = "text-align:center; width:20%;">Aksi</th>
            
            </tr>
        </thead>
        <tbody>
        <?php 
            //query data barang
            $data_siswa = select("SELECT * FROM siswa");
            $no = 1;
        ?>
       <?php foreach($data_siswa as $siswa): ?>
                    <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $siswa['nis']; ?></td>
                    <td><?php echo $siswa['namasiswa']; ?></td>
                    <td><?php echo jenkel($siswa['jk']); ?></td>
                    <td><?php echo $siswa['alamat']; ?></td>
                    <td><?php echo date("d-m-Y", strtotime($siswa['tanggal_lahir'])); ?></td>
                    <td align="center">
                    <form method="post" action="">
                         
                         <a href = "index.php?p=ubah_barang&id=<?php echo $data['idbarang']; ?>"> 
                         
                         <button type="submit" name="ubah" class="btn btn-info"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i> Ubah</button></a>
                     <!-- Assuming id of the item to be deleted is 1 -->
                     <input type="hidden" name="idbarang" value="<?php echo $data['idbarang']; ?>">
                     <input type="hidden" name="nama_barang" value="<?php echo $data['nama']; ?>">
                         <button type="submit" name="delete" class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i> Hapus</button>
                     </form>
                </td>
                </tr>
         
        <?php endforeach; ?>
       
            
            
        </tbody>
    </table>
    </div>
    <script>
       new DataTable('#tabelsiswa');
    </script>