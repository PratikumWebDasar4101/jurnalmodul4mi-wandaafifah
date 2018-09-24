<?php
$Hobi = $_POST['Hobi'];
echo "Hobi kesukaan :";
foreach ($Hobi as $key => $value) {
	# code...
}

{
	print_r($_POST['Hobi']);
}
$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir ="upload/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo "uploaded.<br>";
?>
<img src="upload/<?php echo $nama_file; ?>"><br><br>
<a href="indexx.html"> Halaman awal </a>
