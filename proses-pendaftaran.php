<?php
include("config.php");

// Cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])) {
    // Ambil data dari formulir
    $ID_Buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis']; // Perbaikan penulisan variabel
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $harga = $_POST['harga'];
    
    // Buat query
    $sql = "INSERT INTO penjualanbuku (id_buku, judul_buku, penulis, penerbit, tahun_terbit, harga) VALUES ('$ID_Buku', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit','$harga')";
    $query = mysqli_query($db, $sql);
    
    // Apakah query simpan berhasil?
    if($query) {
        // Kalau berhasil alihkan ke halaman index.php dengan status=sukses 
        header('Location: index.php?status=sukses');
    } else {
        // Kalau gagal alihkan ke halaman indek.php dengan status-gagal 
        header('Location: index.php?status=gagal');
    } 
} else {
    die("Akses dilarang...");
}
?>
