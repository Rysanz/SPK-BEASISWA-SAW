<!DOCTYPE html>

<?php
  include 'koneksi.php';

      $id = '';
      $nama_beasiswa = '';
      $nilai_raport = '';
      $penghasilan = '';
      $tanggungan = '';

  if(isset($_GET['ubah'])){
      $id = $_GET['ubah'];
      
      $query = "SELECT * FROM tb_beasiswa WHERE id = '$id';";
      $sql = mysqli_query($conn, $query);

      $result = mysqli_fetch_assoc($sql);

      $nama_beasiswa = $result['nama_beasiswa'];
      $nilai_raport = $result['nilai_raport'];
      $penghasilan = $result['penghasilan'];
      $tanggungan = $result['tanggungan'];

      //var_dump($result);

      //die();
  }
?>


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
    <nav class="navbar bg-light mb-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> SPK BEASISWA METODE SIMPLE ADDITIVE WEIGHTING (SAW) </a>
      </div>
    </nav>

    <div class="container">
      <form method="POST" action="proses.php">
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        <div class="mb-3 row">
          <label for="nama_beasiswa" class="col-sm-2 col-form-label">Nama Beasiswa</label>
          <div class="col-sm-10">
            <input type="text" name="nama_beasiswa" class="form-control" id="nama_beasiswa" placeholder="Ex: Beasiswa Prestasi" value="<?php echo $nama_beasiswa; ?>"/>
          </div>
        </div>
        <div class="mb-3 row">
          <!-- <label for="nilai_raport" class="col-sm-2 col-form-label">Nilai Raport</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nilai_raport" placeholder="Ex: 0.90" />
          </div> -->
          <label for="jkel" class="col-sm-2 col-form-label">Nilai Raport</label>
          <div class="col-sm-10">
            <select id="jkel" name="nilai_raport" class="from-select">
              <option selected>Nilai Raport</option>
              <option <?php if($nilai_raport == '1.00'){ echo "selected";} ?> value="1.00">1.00</option>
              <option <?php if($nilai_raport == '0.90'){ echo "selected";} ?> value="0.90">0.90</option>
              <option <?php if($nilai_raport == '0.80'){ echo "selected";} ?> value="0.80">0.80</option>
              <option <?php if($nilai_raport == '0.70'){ echo "selected";} ?> value="0.70">0.70</option>
              <option <?php if($nilai_raport == '0.60'){ echo "selected";} ?> value="0.60">0.60</option>
              <option <?php if($nilai_raport == '0.50'){ echo "selected";} ?> value="0.50">0.50</option>
              <option <?php if($nilai_raport == '0.40'){ echo "selected";} ?> value="0.40">0.40</option>
              <option <?php if($nilai_raport == '0.30'){ echo "selected";} ?> value="0.30">0.30</option>
              <option <?php if($nilai_raport == '0.20'){ echo "selected";} ?> value="0.20">0.20</option>
              <option <?php if($nilai_raport == '0.10'){ echo "selected";} ?> value="0.10">0.10</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <!-- <label for="penghasilan" class="col-sm-2 col-form-label">Penghasilan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penghasilan" placeholder="Ex: 0.60" />
          </div> -->
          <label for="jkel" class="col-sm-2 col-form-label">Penghasilan</label>
          <div class="col-sm-10">
            <select id="jkel" name="penghasilan" class="from-select">
              <option selected>Penghasilan</option>
              <option <?php if($penghasilan == '1.00'){ echo "selected";} ?> value="1.00">1.00</option>
              <option <?php if($penghasilan == '0.90'){ echo "selected";} ?> value="0.90">0.90</option>
              <option <?php if($penghasilan == '0.80'){ echo "selected";} ?> value="0.80">0.80</option>
              <option <?php if($penghasilan == '0.70'){ echo "selected";} ?> value="0.70">0.70</option>
              <option <?php if($penghasilan == '0.60'){ echo "selected";} ?> value="0.60">0.60</option>
              <option <?php if($penghasilan == '0.50'){ echo "selected";} ?> value="0.50">0.50</option>
              <option <?php if($penghasilan == '0.40'){ echo "selected";} ?> value="0.40">0.40</option>
              <option <?php if($penghasilan == '0.30'){ echo "selected";} ?> value="0.30">0.30</option>
              <option <?php if($penghasilan == '0.20'){ echo "selected";} ?> value="0.20">0.20</option>
              <option <?php if($penghasilan == '0.10'){ echo "selected";} ?> value="0.10">0.10</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <!-- <label for="tanggungan" class="col-sm-2 col-form-label">Tanggungan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="tanggungan" placeholder="Ex: 0.60" />
          </div> -->
          <label for="jkel" class="col-sm-2 col-form-label">Tanggungan</label>
          <div class="col-sm-10">
            <select id="jkel" name="tanggungan" class="from-select">
              <option selected>Tanggungan</option>
              <option <?php if($tanggungan == '1.00'){ echo "selected";} ?> value="1.00">1.00</option>
              <option <?php if($tanggungan == '0.90'){ echo "selected";} ?> value="0.90">0.90</option>
              <option <?php if($tanggungan == '0.80'){ echo "selected";} ?> value="0.80">0.80</option>
              <option <?php if($tanggungan == '0.70'){ echo "selected";} ?> value="0.70">0.70</option>
              <option <?php if($tanggungan == '0.60'){ echo "selected";} ?> value="0.60">0.60</option>
              <option <?php if($tanggungan == '0.50'){ echo "selected";} ?> value="0.50">0.50</option>
              <option <?php if($tanggungan == '0.40'){ echo "selected";} ?> value="0.40">0.40</option>
              <option <?php if($tanggungan == '0.30'){ echo "selected";} ?> value="0.30">0.30</option>
              <option <?php if($tanggungan == '0.20'){ echo "selected";} ?> value="0.20">0.20</option>
              <option <?php if($tanggungan == '0.10'){ echo "selected";} ?> value="0.10">0.10</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row mt-3">
          <div class="col">
            <?php
              if(isset($_GET['ubah'])){
            ?>
              <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                <i class="fa fa-bookmark"></i>
                Simpan
              </button>
            <?php
              } else {
            ?>
              <button type="submit" name="aksi" type="submit" value="add" class="btn btn-primary">
                  <i class="fa fa-bookmark"></i>
                  Tambahkan
                </button>
            <?php
              }
            ?>
            <a href="index.php" type="button" class="btn btn-danger">
              <i class="fa fa-reply"></i>
              Batal
            </a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
