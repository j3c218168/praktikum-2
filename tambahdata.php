
<h2>FORM ISI DATA BARU</h2>
<form>
    nama : <input type="text" name="nm">
    <input type="submit" name="sub" value="Simpan Data Baru">
    <input type="submit" name="sub" value="Kembali ke Tampil Data">
	<?php
        if (isset($_GET['sub'])) { //mengecek udah ditekan atau belum
		   echo "<br>Pasti anda sebelumnya sudah ada di halaman ini";
		}
		else{
		   echo "<br>Pasti anda sebelumnya ada di TAMPIL DATA";
		}
	?>
</form>