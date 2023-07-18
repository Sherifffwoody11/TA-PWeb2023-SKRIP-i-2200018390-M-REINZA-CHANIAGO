<?php 
	error_reporting(0);
	include 'db.php';

	if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pesanan = $_POST['pesanan'];

    $file = fopen("pesanan.txt", "a");
    fwrite($file, "Nama: " . $nama . "\n");
    fwrite($file, "Alamat: " . $alamat . "\n");
    fwrite($file, "Pesanan: " . $pesanan . "\n");
    fwrite($file, "-----------------------\n");
    fclose($file);
}

	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);

	$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REINZA TOKOMERAH</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php">REINZA TOKOMERAH</a></h1>
			<ul>
				<li><a href="produk.php">Produk</a></li>
			</ul>
		</div>
	</header>

	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- product detail -->
	<div class="section">
	<div class="container">
		<h3>Detail Produk</h3>
		<div class="box">
			<div class="col-2">
				<img src="produk/<?php echo $p->product_image ?>" width="100%">
			</div>
			<div class="col-2">
				<h3><?php echo $p->product_name ?></h3>
				<h4>Rp. <?php echo number_format($p->product_price) ?></h4>
				<form method="post" action="">
					<input type="hidden" name="pesanan" value="<?php echo $p->product_name ?>">
					<label for="nama">Nama:</label>
					<input type="text" name="nama" id="nama" required>
					<label for="alamat">Alamat:</label>
					<input type="text" name="alamat" id="alamat" required>
					<input type="submit" name="submit" value="Pesan Sekarang" class="rey">
				</form>
				<p>Deskripsi :<br>
					<?php echo $p->product_description ?>
				</p>
				<p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank">
						Hubungin via Whatsapp
						<img src="img/wa.png" width="50px"></a>
				</p>
				<?php if (isset($_POST['submit'])): ?>
					<p>Pesanan Anda telah dikirim. Terima kasih!</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Alamat : Jl. Perintis Kemerdekaan Lr. Sepakat No. 715,Ilir Timur II,Kota Palembang, Sumatera Selatan 31526 </h4>

			<h4>Email : Reinza55@gmail.com </h4>
			
			<h4>No. Hp : 089520198470</h4>
			<p><?php echo $a->admin_telp ?></p>
			<small>Copyright &copy; M REINZA CHANIAGO-2200018390.</small>
		</div>
	</div>
</body>
</html>

