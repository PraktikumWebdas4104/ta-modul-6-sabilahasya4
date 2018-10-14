<center>
<table border="2" width="650">
	<tr>
		<th width="100"><a href = "halamanawal.php">Home</a></th>
		<th width="250"><a href="editprofile.php">Edit Profile</a></th>
		<th width="100"><a href="posting.php">Posting</a></th>
		<th width="280"><a href="daftarpostingan.php">Lihat Postingan</a></th>
		<th width="350"><a href="semuaposting.php">Lihat Postingan semua</a></th>
		<th width="100"><a href="logout.php">Keluar</a></th>
	</tr>
</table></center><br><br><br><br>
<table border="1">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Foto</th>
		<th>Postingan</th>
	</tr>
<?php 
		session_start();
		$host="localhost";
		$user="root";
		$pass="";
		$db="mhs";
		$conn=mysqli_connect($host,$user,$pass,$db);

		$nim=$_SESSION['nim'];

		$sql=$conn->query("SELECT `nim`,`nama`,`foto`,`cerita` FROM `posting` WHERE `nim`='$nim'");

		$no=1;
		while($row=mysqli_fetch_array($sql)){
		
		echo"<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
				<td><a href='editpostingan.php'>Edit</a></td>
			</tr>";
			$no++;			
		}




 ?>
</table>