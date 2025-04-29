<?php 
include "connection.php";
// include "connection.php" digunakan untuk menghubungkan ke database
$iddataguru = $_GET['iddataguru'];
$sql = "SELECT * FROM dataguru WHERE id = $iddataguru";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_array($query);
// mysqli_fetch_array($query) digunakan untuk mengambil data dari query yang sudah dieksekusi

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/nama/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <div class="h4">Edit data guru</div>
    <form action="edit.php?idguru=<?= $iddataguru ?>" method="post">
        <input type="text" class="form-control mt-3" placeholder="masukkan nama" name="nama" value="<?= $data['nama'] ?>">
        <input type="text" class="form-control mt-3" placeholder="masukkan alamat" name="alamat" value="<?= $data['alamat'] ?>">
        
        </select>
        <input type="radio" name="jenisKelamin" value="L" <?= $data['jenisKelamin'] === 'L' ? 'checked' : '' ?>>Laki - Laki
        <br>
        <input type="radio" name="jenisKelamin" value="P" <?= $data['jenisKelamin'] === 'P' ? 'checked' : '' ?>>Perempuan
        <br>
        <textarea name="mengajar" id="" placeholder="mengajar" class="form-control mt-3"><?= $data['mengajar'] ?></textarea>
        <button class="btn btn-primary mt-3" type="submit">simpan</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/nama/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>