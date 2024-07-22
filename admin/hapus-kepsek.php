<?php
include '../koneksi.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil informasi file foto dari database
    $query = mysqli_query($conn, "SELECT foto_kepsek FROM kepsek WHERE id_kepsek = '$id'");
    $data = mysqli_fetch_assoc($query);

    // Hapus file foto jika ada
    if(file_exists('../uploads/kepsek/'.$data['foto_kepsek'])) {
        unlink('../uploads/kepsek/'.$data['foto_kepsek']);
    }

    // Hapus data dari database
    $delete = mysqli_query($conn, "DELETE FROM kepsek WHERE id_kepsek = '$id'");

    if($delete) {
        header('Location: kepsek.php?success=Data berhasil dihapus');
    } else {
        echo 'Gagal menghapus data '.mysqli_error($conn);
    }
} else {
    header('Location: kepsek.php');
}
?>
