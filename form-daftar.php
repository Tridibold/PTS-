<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Lagos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="form-daftar.php">List Buku</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Data Penjualan Buku Siswa SMK Negeri 1 Lagos</h2><br>
<form action="proses-pendaftaran.php" method="POST">
<div class="mb-3">
  <label for="Judul_buku" class="form-label">Judul buku</label>
  <input type="text" class ="form-control" name="Judul_buku" placeholder="nama lengkap" />
</div>
<div class="mb-3">
  <label for="penulis" class="form-label">Penulis</label>
  <input type="text" class ="form-control" name="penulis" placeholder="nama lengkap" />
</div>
<div class="mb-3">
  <label for="penerbit" class="form-label">penerbit</label>
  <textarea class="form-control" name="penerbit" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="tahun_terbit">Tahun terbit</label>
  <input type="date" id="tahun_terbit" name="tahun_terbit">
</div>
<div class="mb-3">
    <label for="harga" class="form-label">harga </label>
            <select name="harga" class="form-control">
                <option>RP 45.000</option>
                <option>RP 55.000</option>
                <option>RP 65.000</option>
                <option>RP 70.000</option>
                <option>RP 85.000</option>
            </select>
<div class="mb-3">
   <input type="submit" class="btn btn-primary" value="Daftar" name="daftar" />
</div>
    </form>
</div>
    </body>
</html>