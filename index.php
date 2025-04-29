<?php 
include "connection.php";
$sql = "SELECT * FROM dataguru";
$query = mysqli_query($connect, $sql);
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
    <div class="container">
      <div class="h4">Data guru</div>
      <a href="formInput.php"><button class="btn btn-primary">ke halaman input</button></a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>nama</th>
            <th>alamat</th>
            <th>jenis_kelamin</th>
            <th>mengajar</th>
            <th>tanggalLahir</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($data = mysqli_fetch_array($query)): ?>
            <tr>
              <td><?= $data ['nama'] ?></td>
              <td><?= $data ['alamat'] ?></td>
              <td><?= $data ['tanggalLahir'] ?></td>
              <td><?= $data ['jenis_kelamin'] === 'L' ? 'Laki - Laki' : 'Perempuan' ?></td>
              <td><?= $data ['mengajar'] ?></td>
              <td><?= $data ['tanggalLahir'] ?></td>
              <td><a href="formEdit.php?iddataguru=<?= $data ['id'] ?>"><button class="btn btn-warning">Edit</button></a>
                  <a href="delete.php?iddataguru=<?= $data ['id'] ?>"><button onclick="return confirmDelete()" class="btn btn-danger">Delete</button></a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/nama/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
  <script>
    function confirmDelete() {
        const answer = confirm("Are you sure you want to delete ?");
        if (answer) {
            return true;
        } else {
            return false;
        }
    }
  </script>
</html>