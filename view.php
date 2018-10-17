<?php
require_once("db.php");
?>
<br>
<center>
	<h1>DESKRIPSI MAHASISWA</h1>
<table border="1">
	<thead>
		<th> Nama </th>
		<th> NIM </th>
		<th> Jenis Kelamin </th>
		<th> Program Studi </th>
		<th> Fakultas </th>
		<th> Asal </th>
		<th> Motto Hidup </th>
		<th> Aksi </th>
	</thead>
	<body style=" background-color: #F5F5DC">
		<?php
		$sql = "SELECT * FROM mahasiswa";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				?>
				 <tr>
				 	<td><?php echo $row["nama"] ?></td>
				 	<td><?php echo $row["nim"] ?></td>
				 	<td><?php echo $row["jeniskelamin"] ?></td>
				 	<td><?php echo $row["programstudy"] ?></td>
				 	<td><?php echo $row["fakultas"] ?></td>
				 	<td><?php echo $row["asal"] ?></td>
				 	<td><?php echo $row["moto"] ?></td>
				 	<td> <a href='editData.php?nim=<?php echo $row['nim']?>' style="text-decoration: none;"> Edit </a>
				</tr>
				
				<?php
			}
		}else{
			echo "Data tidak tersedia";
		}
		mysqli_close($conn);
		?>
	</center>
		
	</body>
</table
<a href="tampilan.php"><img src="panah.png" width="50" height="30"></a>