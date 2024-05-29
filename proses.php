<?php
include("config.php");

if(isset($_POST['aksi'])) {
    if($_POST['aksi'] == 'add') {
        $ID_Buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $harga = $_POST['harga'];
        
        $sql = "INSERT INTO daftar (id_buku, judul_buku, penulis, penerbit, tahun_terbit, harga) 
                VALUES ('$ID_Buku', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit', '$harga')";
                
        $query = mysqli_query($db, $sql);
        
        if($query) {
            header('Location: index.php?status-sukses');
        } else {
            header('Location: index.php?status-gagal');
        }
    } else if($_POST['aksi'] == 'edit') {
        $ID_Buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $harga = $_POST['harga'];
        
        $sql = "UPDATE daftar 
                SET judul_buku = '$judul_buku', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', harga = '$harga' 
                WHERE id_buku = '$ID_Buku'";
                
        $query = mysqli_query($db, $sql);
        
        if($query) {
            header('Location: index.php?status-sukses');
        } else {
            header('Location: index.php?status-gagal');
        } 
    }

}
?>
