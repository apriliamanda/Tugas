<!-- panggil file atas atau header -->
<?php
include 'dbkoneksi.php';
include 'models/Pasien.php';
include 'atas.php';
// buat object dari class kelas
$obj_pasien = new Pasien();
// panggil method tampildata untuk menampilkan seluruh data kelas
$data_pasien = $obj_pasien->TampilData();
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jadwal Pasien</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">

<!-- buat table disini -->
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat Tanggal Lahir </th>
      <th scope="col">Tanggal Lahir </th>
      <th scope="col">Gender </th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kelurahan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1; 
    foreach ($data_pasien as $data) {
    ?>
    <tr>
        <td><?= $no ?></td>
        <td><?= $data['nama']?></td>
        <td><?= $data['tmp_lahir']?></td>
        <td><?= $data['tgl_lahir']?></td>
        <td><?= $data['gender']?></td>
        <td><?= $data['email']?></td>
        <td><?= $data['alamat']?></td>
        <td><?= $data['nama_kelurahan']?></td>
        <td>Edit | Hapus</td>
    </tr>
<?php
$no++;
}

?>
  </tbody>
</table>
<button class="btn btn-dark">Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </main>
<!-- panggil file bawah atau footer -->
<?php
include 'bawah.php';
?>