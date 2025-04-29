<?php 

include "connection.php";

// "nama" diambil dari formInput.php - body - form - input - (name) = (nama)
$iddataguru = $_GET['iddataguru'];
$nama = $_POST ["nama"];
$alamat = $_POST ["alamat"];
$jenisKelamin = $_POST ['jenis_kelamin'];
$mengajar = ["mengajar"];
$tanggalLahir = ["tanggalLahir"];

$sql = "UPDATE iddataguru SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', mengajar = '$mengajar', tanggalLahir = '$tanggalLahir' WHERE id = '$iddataguru'";
$query = mysqli_query($connect, $sql);

if ($query) {
    echo "<script>
            alert ('Edited Success')
            window.location = 'index.php'
            </script>";
}else {
    echo "<script>
            alert ('Edited Failed !!!')
            window.location = 'index.php'
            </script>";
}
?>