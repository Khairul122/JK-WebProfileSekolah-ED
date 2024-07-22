<?php include 'header.php' ?>

<?php
	$visimisi = mysqli_query($conn, "SELECT * FROM visimisi WHERE id_visimisi = '".$_GET['id']."'");

	if(mysqli_num_rows($visimisi) == 0) {
		echo "<script>window.location='visimisi.php'</script>";
	}

	$p = mysqli_fetch_object($visimisi);
?>

<!-- content -->
<div class="content">

	<div class="container">

		<div class="box">

			<div class="box-header">
				Edit Visi Misi
			</div>

			<div class="box-body">

				<form action="" method="POST">
					<div class="form-group">
						<label>Visi</label>
						<textarea name="visi" class="input-control" placeholder="Visi" required><?= $p->visi ?></textarea>
					</div>

					<div class="form-group">
						<label>Misi</label>
						<textarea name="misi" class="input-control" placeholder="Misi" required><?= $p->misi ?></textarea>
					</div>

					<button type="button" class="btn" onclick="window.location = 'visimisi.php'">Kembali</button>
					<input type="submit" name="submit" value="Simpan" class="btn btn-blue">
				</form>

				<?php

				if (isset($_POST['submit'])) {

					$visi = addslashes($_POST['visi']);
					$misi = addslashes($_POST['misi']);

					$update = mysqli_query($conn, "UPDATE visimisi SET 
						visi = '".$visi."',
						misi = '".$misi."'
						WHERE id_visimisi = '".$_GET['id']."'");

					if($update){
						echo "<script>window.location='visimisi-index.php?success=Edit Data Berhasil'</script>";
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
