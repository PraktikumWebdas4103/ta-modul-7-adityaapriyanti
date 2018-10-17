<?php
require_once('db.php');
$id = $_GET['nim'];
$sql = mysqli_query($conn, "SELECT * FROM datamahasiswa WHERE nim = '$id'");
$row = mysqli_fetch_assoc($sql);
if(isset($_POST['upload'])){
 $nim				= $_POST["nim"];
 $nama 				= $_POST["nama"];
 $jk				= $_POST["jk"];
 $prodi				= $_POST["prodi"];
 $fakultas			= $_POST["fakultas"];
 $asal 				= $_POST["asal"];
 $mottohidup		= $_POST["mottohidup"];
 $sql = "UPDATE datamahasiswa SET nama = '$nama', nim = '$nim', jeniskelamin = '$jk', programstudi = '$prodi', fakultas = '$fakultas', asal = '$asal', mottohidup = '$mottohidup' WHERE nim='$id'";
 if (mysqli_query($conn, $sql)) {
 header('Location: tampilan.php');
 }else {
 echo "Data gagal diupload! " . $sql . "<br?" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>

<html>

<head>
<center>
	<title>ubah data mahasiswa</title>
</head>
<body style=" background-color: #F5F5DC"
		<h1>UBAH DATA</h1>
		<form method="POST">
			Nama : <input type="text" name="nama"  minlength="1" maxlength="25"  value="<?php echo $row["nama"];?>"><br><br>
			NIM : <input type="number"  name="nim" maxlength="10"  value="<?php echo $row["nim"];?>"  required ><br><br>
			Jenis Kelamin :	<input type="radio" name="jk" value="Perempuan" required>Perempuan 
					 		<input type="radio" name="jk" value="Laki - Laki" required>Laki - Laki
					 		<br><br>
			Program Studi :
					<select name="prodi">
						<option> D3 Sistem Informasi</option>
						<option> S1 Sistem Informasi</option>
						<option> S1 Desain Komunikasi Visual</option>
						<option> S1 Teknik Perkapalan</option>
						<option> S1 Akuntansi</option>
					</select><br><br>
			Fakultas :
					<select name="fakultas">
						<option> Fakultas Rekayasa Industri</option>
						<option> Fakultas Ilmu Terapan</option>
						<option> Fakultas Hukum</option>
						<option> Fakultas Teknik</option>
						<option> Fakultas Komunikasi</option>
					</select><br><br>
			Asal : <input type="text" name="asal" value="<?php echo $row["asal"];?>"><br><br>
			Motto Hidup : <input type="textarea" name="mottohidup" value="<?php echo $row["mottohidup"];?>"><br><br>
			<input type="submit" name="upload" id="upload" value="Kirim" style="width: 120px"></td>
	</form>
</body>
</html>