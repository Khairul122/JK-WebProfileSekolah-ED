<?php include 'header.php'; ?>

<div class="section" style="background-color: white;">
	<div class="container">

		<h3 class="text-center">Kepala Sekolah SDN 21 Bandar Buat</h3>
		
		<?php 
		// Mengambil data Kepala Sekolah dari database
		$query = mysqli_query($conn, "SELECT * FROM kepsek LIMIT 1");
		$data = mysqli_fetch_assoc($query);
		?>

		<div class="text-center">
			<img src="uploads/kepsek/<?= $data['foto_kepsek'] ?>" alt="<?= $data['nama_kepsek'] ?>" width="300px" style="border-radius: 50%;">
		</div>

		<h3 class="text-center" style="color: red;"><b><?= $data['nama_kepsek'] ?></b></h3>

		<div class="text-center" style="color: black; font-size: 18px;">
			<?= nl2br($data['kata']) ?>
		</div>

	</div>
</div>

<?php include 'footer.php'; ?>
