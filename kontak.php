<?php include 'header.php' ; ?>
	
<div class="section"> 
	<div class="container">


		<h3 class="text-center">Kontak</h3>

		<div class="col-4">
			<p style="margin-bottom: 10px;"><b>Alamat :</b> <br><?= $d->alamat ?> <br></p>
			<p style="margin-bottom: 10px"><b>Telepon :</b> <br><?= $d->telepon ?></p>
			<p style="margin-bottom: 10px"><b>email :</b> <br><?= $d->email ?></p>
			<p style="margin-bottom: 10px"><b>Facebook :</b><br>Sdnduasatu Bandarbuat</p>
			<p style="margin-bottom: 10px"><b>Instagram :</b><br>Sdn21bandarbuat</p>
		</div>

		<div class="box-gmaps">
			<iframe src="<?= $d->google_maps ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	</div>

</div>

<?php include 'footer.php' ; ?>
	