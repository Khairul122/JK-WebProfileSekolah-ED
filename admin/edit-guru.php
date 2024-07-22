<?php include 'header.php' ?>

<?php
	$guru = mysqli_query($conn, "SELECT * FROM guru WHERE id_guru = '".$_GET['id']."'");

	if(mysqli_num_rows($guru) == 0) {
		echo "<script>window.location='guru.php'</script>";
	}

	$p = mysqli_fetch_object($guru);
?>

<!-- content -->
<div class="content">

	<div class="container">

		<div class="box">

			<div class="box-header">
				Edit Data Guru
			</div>

			<div class="box-body">

				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" placeholder="Nama Guru" class="input-control" value="<?= $p->nama ?>" required>
					</div>

					<div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" class="input-control" placeholder="keterangan" id="mytextarea"><?= $p->keterangan ?></textarea>
					</div>

					<div class="form-group">
						<label>Gambar</label>
						<img src="../uploads/guru/<?= $p->gambar ?>" width="200px" class="image">
						<input type="hidden" name="gambar2" value="<?= $p->gambar ?>">
						<input type="file" name="gambar" class="input-control">
					</div>

					<button type="button" class="btn" onclick="window.location = 'guru.php'">Kembali</button>
					<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
				</form>

				<?php

				if (isset($_POST['submit'])) {

					$nama = addslashes(ucwords($_POST['nama']));
					$ket = addslashes($_POST['keterangan']);

					if($_FILES['gambar']['name'] != ''){

						$filename = $_FILES['gambar']['name'];
						$tmpname = $_FILES['gambar']['tmp_name'];
						$filesize = $_FILES['gambar']['size'];

						$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
						$rename = 'guru'.time().'.'.$formatfile;

						$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

						if(!in_array($formatfile, $allowedtype)){
							echo '<div class="alert alert-error">Format File Tidak Diizinkan</div>';
							return false;
						} elseif($filesize > 5000000) {
							echo '<div class="alert alert-error">Ukuran File Tidak Boleh Lebih Dari 5 MB</div>';
							return false;
						} else {
							if(file_exists("../uploads/guru/".$_POST['gambar2'])){
								unlink("../uploads/guru/".$_POST['gambar2']);
							}
							move_uploaded_file($tmpname, "../uploads/guru/".$rename);
						}
					} else {
						$rename = $_POST['gambar2'];
					}

					$update = mysqli_query($conn, "UPDATE guru SET 
						nama = '".$nama."',
						keterangan = '".$ket."',
						gambar = '".$rename."'
						WHERE id_guru = '".$_GET['id']."'");

					if($update){
						echo "<script>window.location='guru.php?success=Edit Data Berhasil'</script>";
					} else {
						echo 'Gagal edit '.mysqli_error($conn);
					}
				}

				?>

			</div>

		</div>		

	</div>

</div>
<?php include 'footer.php' ?>
