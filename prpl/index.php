<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mini Toko Online</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="container">

		<div id="header">
			<h1>Mini Toko Online</h1>
			<span>Kelompok Toko Sembako</span>
		</div>

		<div id="menu">
			<a class="selected" href="index.php">Home</a>
			<a href="testimonial.php">Testimonial</a>
			<a href="produk.php">Daftar Produk</a>
		</div>

		<div id="sidebar">
			<div class="title">&raquo; Keranjang Belanja</div>
			<div class="body">
				<?php cart(); ?>
			</div>

			<div class="title">&raquo; Tentang</div>
			<div class="body">
				Mini Toko Online di buat dengan PHP berdatabase MySQL.<br>
			</div>
		</div>

		<div id="content">
			<div class="title">&raquo; Produk Terbaru</div>
			<?php produk(); ?>
		</div>

		<div class="clear"></div>

		<div id="footer">
			PENGANTAR REKAYASA PERANGKAT LUNAK<br>
		</div>

	</div>

</body>
</html>