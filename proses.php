<?php 

include "connection.php";

// "nama" diambil dari formInput.php - body - form - input - (name) = (nama)
$nama = $_POST ["nama"];
$alamat = $_POST ["alamat"];
$jenis_kelamin = $_POST ["jenis_kelamin"];
$mengajar = $_POST ['mengajar'];
$tanggalLahir = $_POST ['tanggalLahir']

$sql = " INSERT INTO dataguru (nama,alamat,jenis_kelamin,mengajar,) 
VALUE ('$nama', '$alamat', '$jenis_kelamin', '$mengajar','$tanggalLahir',)";
$query = mysqli_query($connect, $sql);

if ($query) {
    echo "<script>
            alert ('Input Succes')
            window.location = 'index.php'
            </script>";
}else {
    echo "<script>
            alert ('Failed !!!')
            window.location = 'formInput.php'
            </script>";
}
?>