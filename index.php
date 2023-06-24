<!DOCTYPE html>
<html>
<head>
	<title>Perhitungan Nilai Mahasiswa</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table border="1" style="background-color: white; 
						border-collapse: collapse; 
						border: 2px solid black;
						width: 20%;">
        <tr>
            <th rowspan="2" style="background-color: blue ; color: white">Nama</th>
            <th colspan="3" style="background-color: blue; color: white">Nilai</th>
        </tr>
        <tr style="background-color:blue; color: white">
            <th>Kimia</th>
            <th>Fisika</th>
            <th>Biologi</th>
        </tr>
        <tr>
            <td>Robby</td>
            <td>76</td>
            <td>80</td>
            <td>81</td>
        </tr>
        <tr>
            <td>Rendi</td>
            <td>84</td>
            <td>70</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Alfian</td>
            <td>96</td>
            <td>70</td>
            <td>71</td>
        </tr>
    </table>

	<h3>Perhitungan Nilai Mahasiswa</h3>
	<form method="POST" action="">
		<label for="tugas">Nama Mahasiswa:</label>
		<input type="text" name="nama" id="nama" required><br><br>
		<label for="tugas">Nilai Tugas:</label>
		<input type="number" name="tugas" id="tugas" required><br><br>
		<label for="uts">Nilai UTS:</label>
		<input type="number" name="uts" id="uts" required><br><br>
		<label for="uas">Nilai UAS:</label>
		<input type="number" name="uas" id="uas" required><br><br>
		<input type="submit" name="submit" value="Hitung">
	</form>
	<?php
	if(isset($_POST['submit'])) {
		// Set skala nilai dan bobot
		$nilai = array("A" => 4, "B" => 3, "C" => 2, "D" => 1, "E" => 0);
		$tbobot = 0.4; // bobot tugas
		$ubobot = 0.3; // bobot ujian tengah semester
		$abobot = 0.3; // bobot ujian akhir semester

		// Input nilai tugas, ujian tengah semester, dan ujian akhir semester
		$nama = $_POST['nama'];
		$tugas = $_POST['tugas'];
		$uts = $_POST['uts'];
		$uas = $_POST['uas'];

		// Hitung nilai akhir
		$nilai_tugas = $tugas * $tbobot * $nilai["A"];
		$nilai_uts = $uts * $ubobot * $nilai["B"];
		$nilai_uas = $uas * $abobot * $nilai["C"];
		$nilai_akhir = ($nilai_tugas + $nilai_uts + $nilai_uas) / 3;

		// Cetak hasil
		echo "<br><strong>Nama :" . $nama . "</strong>";
		echo "<br><strong>Nilai rata-rata :" . $nilai_akhir . "</strong><br>";
		echo "<strong>Grade nilai :";
		if ($nilai_akhir >= 90) {
			echo "A";
		} elseif ($nilai_akhir >= 80) {
			echo "B";
		} elseif ($nilai_akhir >= 70) {
			echo "C";
		} else {
			echo "D";
		}
		
		echo "</strong>";
		echo "<br><strong>Hasil :";
		if ($nilai_akhir >= 90) {
			echo "Lulus";
		} elseif ($nilai_akhir >= 80) {
			echo "Lulus";
		} elseif ($nilai_akhir >= 70) {
			echo "Lulus";
		} else {
			echo "Tidak Lulus";
		}
		} "</strong><br>";
	?>
</body>
</html>