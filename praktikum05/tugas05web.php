<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="proses_form.php" method="POST">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nim" name="nim" placeholder="NIM" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="pilihan mk" class="col-4 col-form-label">Pilihan Mata Kuliah:</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select" required="required">
        <option value="Teknik Informatika">Pemograman Web-2</option>
        <option value="Sistem Informasi">Database</option>
        <option value="Bisnis Digital">Statistik</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai" class="col-4 col-form-label">Nilai:</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="domisili" name="Nilai" placeholder="Nilai" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nim = $_POST["nim"];
  $matkul = $_POST["matkul"];
  $nilai = $_POST["nilai"];

  // Hitung nilai rata-rata
  $rata_rata = $nilai / 100 * 4 + 60;

  // Tentukan grade
  if ($rata_rata >= 85) {
      $grade = 'A';
  } elseif ($rata_rata >= 70) {
      $grade = 'B';
  } elseif ($rata_rata >= 55) {
      $grade = 'C';
  } elseif ($rata_rata >= 40) {
      $grade = 'D';
  } else {
      $grade = 'E';
  }

  echo "<p>NIM: $nim</p>";
  echo "<p>Mata Kuliah: $matkul</p>";
  echo "<p>Nilai: $nilai</p>";
  echo "<p>Rata-rata: $rata_rata</p>";
  echo "<p>Grade: $grade</p>";
} 
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="nim">NIM:</label><br>
  <input type="text" id="nim" name="nim" value=""><br>
  <label for="matkul">Pilih MK:</label><br>
  <select id="matkul" name="matkul">
    <option value="Data Warehouse" selected>Pemograman Web-2</option>
    <option value="DataBase" selected>DataBase</option>
    <option value="Statistik" selected>Statistik</option>
  <label for="nilai">Nilai:</label><br>
  <input type="text" id="nilai" name="nilai" value=""><br>
</form>