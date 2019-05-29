<?php require_once("cart.php"); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mini Toko Online by TUTORIALWEB.NET</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<section>
      	<div class="container">
        	<div class ="row mt-4 mb-4">
          		<div class="col-lg mt-4 mb-4"><br>
          			<h2 class="text-center mt-4 mb-4">Barang</h2>
          			<table class="table table-striped table-hover table-bordered rounded mt-3">
				    	<tr class="bg-info text-white">
				 			<th>Kode</th>
				 			<th>Nama Barang</th>
				 			<th>Harga</th>
				 			<th>Jumlah</th>
				 			<th>Aksi</th>
				 		</tr>
	 					<tr>
			 			<?php
				 			$sql = mysqli_query($konek, "SELECT * FROM tw_produk");

				 				foreach ($sql as $data) {
					 			echo "<td>$data[produk_id]</td>";
					 			echo "<td>$data[produk_nama]</td>";
					 			echo "<td>$data[produk_harga]</td>";
					 			echo "<td>$data[produk_jumlah]</td>";
					 			echo "<td><a href='delete.php?id=$data[produk_id]'>Delete</a></td>";
					 			echo "</tr>";
				 			}
			 			 ?>
		 				</tr>
	 				</table>
				</div>
          	</div>
        </div>
    </section>

</body>
</html>