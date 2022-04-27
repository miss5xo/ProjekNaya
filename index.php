<!--Membuat sambungan ke db-->
<?php
include('config.php');
?>


<html>
<head>
	<title>REKOD MAKLUMAT PELAJAR</title>
</head>
<style>
	h2{
		text-align: center;
		padding-top: 20px;
	}
	body{
		background-color: #7FFFD4;
	}
</style>
<body>
	<h2>REKOD MAKLUMAT PELAJAR</h2>
	<center>
		<table border="1" cellpadding="5" cellspacing="0" bgcolor="white">
			<tr>
				<th>ID PESAKIT</th>
				<th>NAMA PESAKIT</th>
				<th>ALAMAT</th>
				<th>SUHU</th>
				<th>TARIKH</th>
				<th>CATATAN</th>
				<th>PADAM</th>
			</tr>
			
			<!--memaparkan rekod staf-->
			<?php

			$papar = mysqli_query($connect, "SELECT * FROM pesakit");
			while($row = mysqli_fetch_array($papar)){

				echo "
				<tr>
				   <td>",$row['id_pesakit'],"</td>
				   <td>",$row['nama_pesakit'],"</td>
				   <td>",$row['alamat'],"</td>
				   <td>",$row['suhu'],"</td>
				   <td>",$row['tarikh'],"</td>
				   <td>",$row['catatan'],"</td>
				   <td>","<a href=\"padam.php?id_pesakit=",$row['id_pesakit'],"\" Onclick=\"return confirm('Rekod ini akan dihapuskan')\">Padam</td>
				</tr>
				";

			    }
			    ?>
		</table>
		<p><a href="tambah.php"><button name="tambah" type="submit">&#43; TAMBAH PESAKIT</button></a></p>

		</center>
	</center>

</body>
</html>
