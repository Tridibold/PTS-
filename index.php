<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
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
        <a class="nav-link" href="form-daftar.php">Data Buku</a>
      </div>
    </div>
  </div>
</nav>
    <div class="container mt-4">
        <h2>Data Penjualan Buku</h2><br>
        <a class="btn btn-primary" href="form-daftar.php" role="button">Tambah Data</a>
        <br><br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun terbit</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
include("config.php");

// Proses delete
if(isset($_GET['delete'])) {
    $ID_Buku = $_GET['delete'];
    $sql = "DELETE FROM penjualanbuku WHERE ID_Buku='$ID_Buku'";
    $query = mysqli_query($db, $sql);
    if($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    } 
}


if(isset($_GET['edit'])) {
    $ID_Buku = $_GET['edit'];
    
    header('Location: index.php?id=' . $ID_Buku);
}

// Tampilkan data buku
$sql = "SELECT * FROM penjualanbuku";
$query = mysqli_query($db, $sql);
while($buku = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>".$buku['ID_Buku']."</td>";
    echo "<td>".$buku['judul_buku']."</td>";
    echo "<td>".$buku['penulis']."</td>";
    echo "<td>".$buku['penerbit']."</td>";
    echo "<td>".$buku['tahun_terbit']."</td>";
    echo "<td>".$buku['harga']."</td>";
    echo "<td>
    <a href='index.php?edit=" . $buku['ID_Buku'] . "' class='btn btn-warning'>Edit</a>
    <a href='index.php?delete=" . $buku['ID_Buku'] . "' class='btn btn-danger'>Delete</a>
          </td>";
    echo "</tr>";
}
?>
            </tbody>
        </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>