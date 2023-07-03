<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pilih Program Studi</title>
</head>
<body>
	<form action="prosesradio.php" method="post" name="input">
		<h2>Pilih Program Studi</h2>
		<input type="radio" name="prodi" value="TIF" checked/> Teknik Informatika <br/>
		<input type="radio" name="prodi" value="TI"/> Teknik Industri <br/>
		<input type="radio" name="prodi" value="TE"/> Teknik Elektro <br/>
		<input type="radio" name="prodi" value="TK"/> Teknik Kimia <br/>
		<input type="radio" name="prodi" value="TP"/> Teknologi Pangan <br/>
		<input type="submit" name="Pilih" value="Pilih"/>
		<input type="reset" name="reset" value="Reset"/>
	</form>
</body>
</html>