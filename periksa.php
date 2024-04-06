<!-- panggil file atas atau header -->
<?php
include 'dbkoneksi.php';
include 'models/Periksa.php';
include 'atas.php';
// buat object dari class kelas
$obj_periksa = new Periksa();
// panggil method tampildata untuk menampilkan seluruh data kelas
$data_periksa = $obj_periksa->TampilData();
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jadwal Periksa</h1>
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
      <th scope="col">Tanggal</th>
      <th scope="col">Berat Badan</th>
      <th scope="col">Tinggi Badan </th>
      <th scope="col">Tensi </th>
      <th scope="col">Keterangan</th>
      <th scope="col">pasien</th>
      <th scope="col">dokter</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1; 
    foreach ($data_periksa as $daperik) {
    ?>
    <tr>
        <td><?= $no ?></td>
        <td><?= $daperik['tanggal']?></td>
        <td><?= $daperik['berat']?></td>
        <td><?= $daperik['tinggi']?></td>
        <td><?= $daperik['tensi']?></td>
        <td><?= $daperik['keterangan']?></td>
        <td><?= $daperik['pasien']?></td>
        <td><?= $daperik['dokter']?></td>
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