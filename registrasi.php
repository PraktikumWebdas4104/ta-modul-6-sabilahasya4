<form method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length=35></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length=10></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="text" name="password" length=15>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="MI04">MI04 &nbsp; <input type="radio" name="kelas" value="MI03">MI03 &nbsp; <input type="radio" name="kelas" value="MI02">MI02 &nbsp; <input type="radio" name="kelas" value="MI01">MI01 &nbsp;</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenkel" value="Laki-Laki">Laki-Laki &nbsp; <input type="radio" name="jenkel" value="Perempuan">Perempuan </td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi" value="Mancing">Mancing &nbsp; <input type="checkbox" name="hobi" value="Diving"> Diving &nbsp; <input type="checkbox" name="hobi" value="Memanah">Memanah</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name ="fakultas">
				<option >-</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
				<option value="Fakultas Informatika">Fakultas Informatika</option></select></td>

		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" cols ="25" row = "10"></textarea></td>
		</tr>
	</table>
	<br><br>
	<input type="submit" name="daftar" value="Daftar">
	
</form>
<?php 
	if(isset($_POST['daftar'])){
		$host="localhost";
		$user="root";
		$pass="";
		$db="mhs";
		$conn=mysqli_connect($host,$user,$pass,$db);
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];
		$password=$_POST['password'];
		$kelas=$_POST['kelas'];
		$jeniskel=$_POST['jenkel'];
		$hobby=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];

		$sql=$conn->query("INSERT INTO `datamhs`(`nama`,`nim`,`password`,`kelas`,`jenis_kelamin`,`hobi`,`fakultas`,`alamat`) VALUES('$nama','$nim','$password','$kelas','$jeniskel','$hobby','$fakultas','$alamat')");
		echo "Data berhasil dimasukkan"."<br>";
		echo "<a href ='loginn.php'>Klik</a> untuk lanjut";
	}
 ?>