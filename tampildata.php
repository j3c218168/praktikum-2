

<h2>Data Mahasiswa</h2>
<form action="tambahdata.php">
    <input type="submit" value="Tambah Data Baru">
</form>
<?php
    include "koneksi.php";
	$r=mysqli_query($kon,"SELECT * FROM mahasiswa");
	$i = 1;
	while($brs=mysqli_fetch_assoc($r)) {
		 echo $i++.". ". $brs["nama"]."<br>";
		}
?>