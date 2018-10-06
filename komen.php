<?php  
include('koneksi.php');
	session_start();
	$nama = $_SESSION['nama'];
	$result = mysqli_query($db, "SELECT * FROM t_modul5 WHERE nama = '$nama'; ");
	$row = mysqli_fetch_array($result);
	if (isset($_POST['submit2'])) {
		$komentar = $_POST['komentar'];
		if (str_word_count($komentar)<5) {
			echo "<script language='javascript'>alert('Komentar kurang dari 5 kata');
					document.location('komentar.php');</script>";
		}
		if (str_word_count($komentar)>= 5) {
			mysqli_query($db, "UPDATE t_modul5 SET komentar='$komentar' WHERE nama = '$nama'; ");
			echo '<script language="javascript">
			alert("login berhasil");
			</script>';
			header("location: hasil.php");
		}else{
			echo '<script language="javascript">
			alert("login fail");
			document.location = "komen.php"; 
			</script>';
			session_destroy();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="komen.php" method="post">
		<table>
			<tr>
				<td>Halo </td>
				<td><?php echo $nama; ?></td>
			</tr>
			<tr>
				<td>Masukkan Komentar Anda </td>
				<td>
					<textarea name="komentar"></textarea>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit2" value="masuk"></td>
			</tr>
		</table>
	</form>
</body>
</html>

