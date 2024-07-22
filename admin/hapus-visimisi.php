<?php include 'header.php'; ?>

<!-- content -->
<div class="content">

	<div class="container">

		<div class="box">

			<div class="box-header">
				Tambah Visi Misi
			</div>

			<div class="box-body">

				<form action="" method="POST">
					<div class="form-group">
						<label>Visi</label>
						<textarea name="visi" class="input-control" placeholder="Visi" required></textarea>
					</div>

					<div class="form-group">
						<label>Misi</label>
						<textarea name="misi" class="input-control" placeholder="Misi" required></textarea>
					</div>

					<button type="button" class="btn" onclick="window.location = 'visimisi-index.php'">Kembali</button>	
					<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
				</form>

				<?php
				if(isset($_POST['submit'])) {
					$visi = addslashes($_POST['visi']);
					$misi = addslashes($_POST['misi']);

					$simpan = mysqli_query($conn, "INSERT INTO visimisi (visi, misi) VALUES (
						'".$visi."',
						'".$misi."'
					)");

					if($simpan){
						echo '<div class="alert alert-success">Simpan Berhasil</div>';
					} else {
						echo 'Gagal Simpan '.mysqli_error($conn);
					}
				}
				?>
			</div>
		</div>		
	</div>
</div>

<?php include 'footer.php'; ?>
