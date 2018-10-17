
<?php 

require_once("db.php");
$nama 			= $_POST['nama'];
$nim 			= $_POST['nim'];
$jeniskelamin	= $_POST['jeniskelamin'];
$program 		= $_POST['program'];
$fakultas 		= $_POST['fakultas'];
$asal 			= $_POST['asal'];
$moto 			= $_POST['moto'];

$sql = "INSERT INTO mahasiswa(nama,nim,jeniskelamin,programstudy,fakultas,asal,moto) 
		VALUES ('$nama', '$nim', '$jeniskelamin', '$program', '$fakultas', '$moto', '$asal')";

if (mysqli_query($conn, $sql)) {
	echo "<center> New record created successfully </center>";

}else{

	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}		

mysqli_close($conn);
echo"<br>";
echo "<center> Silahkan klik <a href='tampilan.php'>link ini</a> untuk selanjutnya </center>";

?>
