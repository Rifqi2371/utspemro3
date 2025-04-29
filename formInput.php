
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data guru</title>
    <link href="https://cdn.jsdelivr.net/nama/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <div class="h4">input data guru</div>
    <form action="proses.php" method="post">
        <input type="text" class="form-control mt-3" placeholder="masukkan nama" name="nama">
        <input type="text" class="form-control mt-3" placeholder="masukkan alamat" name="alamat">
        </select>
        <input type="radio" name="jenis_kelamin" value="L">Laki - Laki
        <br>
        <input type="radio" name="jenis_kelamin" value="P">Perempuan
        <br>
        <textarea name="mengajar" id="" placeholder="mengajar" class="form-control mt-3"></textarea>
        <br>
        <div class="row mb-3 col-3">

        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
        
        <div>
        <div class="row">

        <input type="date" id="tanggalLahir" class="form-control bg-primary text-light" name="tanggalLahir" placeholder="Masukkan Tanggal Lahir" required>

        <div>

        <button class="btn btn-danger text-light mt-3" type="submit">simpan</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/nama/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>