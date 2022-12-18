<?php
    include 'koneksi.php';

    $query = "SELECT * FROM tb_beasiswa;";
    $sql = mysqli_query($conn, $query);
    $no = 0;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <!--Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.min.js"></script>

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css" />

    <title>SPK BEASISWA METODE SAW</title>
  </head>

  <body>
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> SPK BEASISWA METODE SIMPLE ADDITIVE WEIGHTING (SAW) </a>
      </div>
    </nav>

    <!--TABEL BEASISWA-->
    <div class="container-fluid">
      <h1 class="mt-3">TABEL BEASISWA</h1>

      <a href="kendali.php" type="button" class="btn btn-primary mb-3">
        <i class="fa fa-plus-circle"></i>
        Tambah Beasiswa
      </a>

      <!--TABEL-->
      <div class="table-responsive">
        <table class="table align-middle table-bordered table-hover">
          <thead>
            <tr>
              <th><center>No.</center></th>
              <th>Nama Beasiswa</th>
              <th>Nilai Raport</th>
              <th>Penghasilan</th>
              <th>Tanggungan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while($resul = mysqli_fetch_assoc($sql)){
            ?>
            <tr>
              <td>
                <?php echo ++$no; ?>.
              </td>
              <td>
              <?php echo $resul['nama_beasiswa']; ?>
              </td>
              <td>
              <?php echo $resul['nilai_raport']; ?>
              </td>
              <td>
              <?php echo $resul['penghasilan']; ?>
              </td>
              <td><?php echo $resul['tanggungan']; ?>
            </td>
              <td>
                <a href="kendali.php?ubah=<?php echo $resul['id']; ?>" type="button" class="btn btn-success btn-sm">
                  <i class="fa fa-pencil-square"></i>
                </a>
                <a href="proses.php?hapus=<?php echo $resul['id']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Yakin ingin di hapus ?')">
                  <i class="fa fa-trash"></i>
                </a>
              </td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
