<?php 

include '../koneksi.php';

if(isset($_GET['idguru'])){
    $id_guru = $_GET['idguru'];

    // Ambil data guru berdasarkan id_guru
    $guru = mysqli_query($conn, "SELECT * FROM guru WHERE id_guru = '$id_guru'");

    if(mysqli_num_rows($guru) > 0){
        $p = mysqli_fetch_object($guru);

        // Hapus file gambar dari folder uploads/guru
        if(file_exists("../uploads/guru/".$p->gambar)){
            unlink("../uploads/guru/".$p->gambar);
        }

        // Hapus data dari tabel guru
        $delete = mysqli_query($conn, "DELETE FROM guru WHERE id_guru = '$id_guru'");

        if($delete){
            echo "<script>window.location='guru.php?success=Hapus Data Berhasil'</script>";
        } else {
            echo "<script>window.location='guru.php?error=Gagal Hapus Data'</script>";
        }
    } else {
        echo "<script>window.location='guru.php?error=Data Tidak Ditemukan'</script>";
    }
} else {
    echo "<script>window.location='guru.php'</script>";
}
?>