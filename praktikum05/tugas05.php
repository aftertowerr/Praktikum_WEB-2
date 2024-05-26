<!DOCTYPE html>
<html>
<body>

<h2>Form Nilai Ujian</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="nim">NIM:</label><br>
  <input type="text" id="nim" name="nim" value=""><br></br>
  <label for="matkul">Pilih MK:</label><br>
  <select id="matkul" name="matkul"><br></br>
    <option value="Data Warehouse" selected>Data Warehouse</option>
    <option value="DataBase" selected>DataBase</option>
    <option value="Statistik" selected>Statistik</option>
  </select><br></br>
  <label for="nilai">Nilai:</label><br>
  <input type="text" id="nilai" name="nilai" value=""><br></br>
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nim = $_POST["nim"];
  $matkul = $_POST["matkul"];
  $nilai = $_POST["nilai"];

  // Hitung nilai rata-rata
  $rata_rata = $nilai / 100 * 3 + 60;

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
