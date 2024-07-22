<?php include 'header.php'; ?>
<!-- Bagian Banner -->
<div class="banner" style="background-image: url('uploads/identitas/<?= $d->foto_sekolah ?>') ;">
	<div class="banner-text">
		<div class="container">
			<h3> Selamat Datang Di Website <?= $d->nama ?> </h3>
			<p>Sekolah Dasar Negri Yang Sudah Menggunakan Kurikulum Merdeka. </p>
		</div>
	</div>
</div>

<!-- Bagian Sambutan -->
<div class="section">
    <div class="container text-center">
        <h3>Sambutan Kepala Sekolah</h3>

        <?php 
        // Mengambil data Kepala Sekolah dari database
        $query = mysqli_query($conn, "SELECT * FROM kepsek LIMIT 1");
        $data = mysqli_fetch_assoc($query);
        ?>

        <div class="kepsek-container">
            <div class="kepsek-image">
                <img src="uploads/kepsek/<?= $data['foto_kepsek'] ?>" alt="<?= $data['nama_kepsek'] ?>" style="width:100px">
            </div>
            <div class="kepsek-details">
                <h3 class="kepsek-name"><?= $data['nama_kepsek'] ?></h3>
                <p><?= nl2br($data['kata']) ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Bagian Galeri -->
<div class="section" id="galeri">
	<div class="container text-center">
		<h3 class="text-center">Galeri</h3>

		<?php
		$galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC");
		if (mysqli_num_rows($galeri) > 0) {
			while ($p = mysqli_fetch_array($galeri)) {
		?>

				<div class="col-4">

					<a href="uploads/galeri/<?= $p['foto'] ?>" target="_blank" class="thumbnail-link">
						<div class="thumbnail-box">

							<div class="thumbnail-img" style="background-image: url('uploads/galeri/<?= $p['foto'] ?>');">

							</div>

							<div class="thumbnail-text">
								<?= $p['keterangan'] ?>
							</div>

						</div>
					</a>
				</div>

			<?php }
		} else { ?>

			Tidak ada Data

		<?php } ?>
	</div>
</div>

<!-- Bagian Informasi -->

<div class="section">

	<div class="container text-center">

		<h3> Informasi Terbaru </h3>

		<?php

		$informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC LIMIT 8");
		if (mysqli_num_rows($informasi) > 0) {
			while ($p = mysqli_fetch_array($informasi)) {
		?>

				<div class="col-4">

					<a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
						<div class="thumbnail-box">

							<div class="thumbnail-img" style="background-image: url('uploads/informasi/<?= $p['gambar'] ?>');">

							</div>

							<div class="thumbnail-text">
								<?= $p['judul'] ?>
							</div>

						</div>
					</a>
				</div>

			<?php }
		} else { ?>

			Tidak ada Data

		<?php } ?>


	</div>

</div>

<?php include 'footer.php'; ?>