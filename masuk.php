<?php  
	include('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form action="masuk.php" method="post">
			<table>
				<tr>
					<td>NIM : </td>
					<td><input  type="text" name="nim"></td>
				</tr>
				<tr>
					<td>Nama : </td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Email : </td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir : </td>
					<td><input type="date" name="date"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin : </td>
					<td><input type="radio" name="jk" value="laki-laki">laki-laki</td>
					<td><input type="radio" name="jk" value="perempuan">perempuan</td>
				</tr>
				<tr>
					<td>Program Studi : </td>
					<td><select name="ps">
							<option value="manajemen informatika">Manajemen Informatika</option>
							<option value="teknik komputer">teknik komputer</option>
							<option value="teknik telekomunikasi">teknik komunikasi</option>
							<option value="perhotelan">perhotelan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Fakultas : </td>
					<td><select name="fk">
							<option value="FIT">FIT</option>
							<option value="FIK">FIK</option>
							<option value="FTE">FTE</option>
							<option value="FKB">FKB</option>
						</select>					
					</td>
				</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="masuk">
				</td>
			</tr>
		</form>
</table>
<?php  
	if(isset($_POST['submit'])){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$ps = $_POST['ps'];
		$fk = $_POST['fk'];

	if (isset($_POST['jk'])) {
		$jk = $_POST['jk'];
		}
	if (empty($nim)) {
			echo "<script language='javascript'>alert('nim jangan kosong');
					document.location('masuk.php');</script>";
		}
	if (strlen($nim)>10) {
			echo "<script language='javascript'>alert('nim maksimal 10 angka');
					document.location('masuk.php');</script>";
		}
	if (!is_numeric($nim)) {
			echo "<script language='javascript'>alert('nim bukan angka');
					document.location('masuk.php');</script>";
		}
	if (empty($nama)) {
			echo "<script language='javascript'>alert('nama jangan kosong');
					document.location('masuk.php');</script>";
		}
	if (strlen($nama)>20) {
			echo "<script language='javascript'>alert('nama terlalu panjang');
					document.location('masuk.php');</script>";
		}
	if (is_numeric($nama)) {
			echo "<script language='javascript'>alert('nama mengandung angka');
					document.location('masuk.php');</script>";
		}
	if (strlen($nama)<=20 && strlen($nim)<=10 && filter_var($email, FILTER_VALIDATE_EMAIL) && isset($date) && isset($jk) && isset($ps) && isset($fk)) {
			session_start();
			$_SESSION['nama'] = $nama;
			mysqli_query($db, "INSERT INTO t_modul5(nim, nama, email, tgl_lahir, jns_kelamin, prg_studi, fakultas) VALUES('$nim', '$nama', '$email', '$date', '$jk', '$ps', '$fk');");
			echo '<script language="javascript">
			alert("login berhasil");
			</script>';
			header("location: komen.php");
		}else{
			echo '<script language="javascript">
			alert("login fail");
			document.location = "masuk.php"; 
			</script>';
			session_destroy();
		}
}
?>
</body>
</html>	