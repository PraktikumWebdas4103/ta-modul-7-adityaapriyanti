<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body style=" background-color: #F5F5DC">
	<table align="center">
		<form action="loginproses.php" method="POST" enctype="multipart/form-data">
			<tr>
				<td colspan="3" align="center"><h1>INPUT DATA MAHASISWA</h1></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></br></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" name="nim"></td>
			</tr>

			<tr>
				<td> Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-laki</br>
					<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
				</td>
			</tr>

			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
					<select name="program">
						<option> D3 Sistem Informasi</option>
						<option> S1 Sistem Informasi</option>
						<option> S1 Desain Komunikasi Visual</option>
						<option> S1 Teknik Perkapalan</option>
						<option> S1 Akuntansi</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
						<option> Fakultas Rekayasa Industri</option>
						<option> Fakultas Ilmu Terapan</option>
						<option> Fakultas Hukum</option>
						<option> Fakultas Teknik</option>
						<option> Fakultas Komunikasi</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" name="asal"></td>
			</tr>

			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><textarea name="moto"></textarea></td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>
