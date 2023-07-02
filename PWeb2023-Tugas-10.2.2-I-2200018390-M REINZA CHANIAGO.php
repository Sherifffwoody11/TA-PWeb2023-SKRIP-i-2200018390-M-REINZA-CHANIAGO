<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
	
	<form method="POST">
		<h3>Segitiga Bintang</h3>
		<label for="tinggi">Masukkan Tinggi:</label>
		<input type="number" name="tinggi" id="tinggi" required>
		<button type="submit" name="triangle">Buat Segitiga</button>
	</form>
	
	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['convert'])) {
			$nilai = $_POST['nilai'];
			
		} if (isset($_POST['triangle'])) {
			$tinggi = $_POST['tinggi'];

			if ($tinggi >= 1) {
				for ($baris = 1; $baris <= $tinggi; $baris++) {
					// Buat sejumlah spasi
					for ($i = 1; $i < $tinggi - $baris; $i++) {
						echo "&nbsp;"; // Karakter spasi
					}

					// Tampilkan * sebanyak (2 * baris - 1)
					for ($j = 1; $j < 2 * $baris; $j++) {
						echo "*";
					}

					// Pindah baris
					echo "<br>";
				}
			} else {
				echo "Masukkan tinggi yang lebih besar dari 0.";
			}
		}
	}
	?>
	
</body>
</html>
