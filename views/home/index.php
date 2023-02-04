<?php 
    $id = empty($_SESSION['ADMIN']) ? '' : $_SESSION['ADMIN']['id_login'];
    $sql = "SELECT * FROM tbl_user";
    $row = $koneksi->prepare($sql);
    $row->execute();
    $hasil = $row->fetchAll();
    $jumlahData = count($hasil);
?>
<div class="row">
    <div class="col-lg-12">
        <?php if(!empty($_SESSION['ADMIN'])){?>
            <div class="alert alert-warning mt-5 alert-dismissible fade show" role="alert">
                <strong> 
                    <i class="fa fa-check"></i>
                    Selamat Datang, 
                    <?php echo $_SESSION['ADMIN']['nama_pengguna'];?>
                </strong> 
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    Dashboard
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                          <div class="well">
                            <h4>Users</h4>
                            <p><?php echo $jumlahData;?></p> 
                          </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Nama Pengguna</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hasil as $data): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($data['username']) ?></td>
                                <td><?php echo htmlspecialchars($data['nama_pengguna']); ?></td>
                                <td><?php echo htmlspecialchars($data['telepon']); ?></td>
                                <td><?php echo htmlspecialchars($data['email']); ?></td>
                                <td><?php echo htmlspecialchars($data['alamat']); ?></td>
                                <td><a href='"../../index.php?hal=profil&id=<?php echo htmlspecialchars($data['id_login']); ?>' class="btn btn-primary btn-md enabled" role="button" aria-disabled="true">Edit</a> <a href="#" class="btn btn-danger btn-md disabled" role="button" aria-disabled="true">Hapus</a></td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
                </div>
            </div>
        <?php }else{?>
            <div class="card mt-5">
                <div class="card-header">
                    Home
                </div>
                <div class="card-body">
                    <div class="alert alert-danger mt-2">
                        <h5> <i class="fa fa-ban"></i>
                            Maaf Anda Belum Dapat Akses Website, 
                            Silahkan Login Terlebih Dahulu !
                        </h5>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>