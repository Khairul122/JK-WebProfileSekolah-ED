<?php include 'header.php'; ?>

<!-- content -->
<div class="content">

	<div class="container">

		<div class="box">

			<div class="box-header">
				Tambah Kepsek
			</div>

			<div class="box-body">

				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Kepala Sekolah</label>
						<input type="text" name="nama_kepsek" class="input-control" placeholder="Nama Kepala Sekolah" required>
					</div>

					<div class="form-group">
						<label>Foto Kepala Sekolah</label>
						<input type="file" name="foto_kepsek" class="input-control" required>
					</div>

					<div class="form-group">
						<label>Kata Sambutan</label>
						<textarea name="kata" class="input-control" placeholder="Kata Sambutan" id="mytextarea"></textarea>
					</div>

					<button type="button" class="btn" onclick="window.location = 'kepsek-index.php'">Kembali</button>	
					<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
				</form>

				<?php
				if(isset($_POST['submit'])) {
					$nama_kepsek = addslashes($_POST['nama_kepsek']);
					$kata = addslashes($_POST['kata']);

					$filename = $_FILES['foto_kepsek']['name'];
					$tmpname = $_FILES['foto_kepsek']['tmp_name'];
					$filesize = $_FILES['foto_kepsek']['size'];

					$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
					$rename = 'kepsek'.time().'.'.$formatfile;

					$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

					if(!in_array($formatfile, $allowedtype)){
						echo '<div class="alert alert-error">Format File Tidak Diizinkan</div>';	
					} elseif($filesize > 5000000) {
						echo '<div class="alert alert-error">Ukuran File Tidak Boleh Lebih Dari 5 MB</div>';
					} else {
						move_uploaded_file($tmpname, "../uploads/kepsek/".$rename);

						$simpan = mysqli_query($conn, "INSERT INTO kepsek (nama_kepsek, foto_kepsek, kata) VALUES (
							'".$nama_kepsek."',
							'".$rename."',
							'".$kata."'
						)");

						if($simpan){
							echo '<div class="alert alert-success">Simpan Berhasil</div>';
						} else {
							echo 'Gagal Simpan '.mysqli_error($conn);
						}
					}
				}
				?>
			</div>
		</div>		
	</div>
</div>

<?php include 'footer.php'; ?>
