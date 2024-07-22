<?php include 'header.php'; ?>

<div class="section" style="background-color: #f9f9f9; padding: 40px 0;">
	<div class="container">
		<h3 class="text-center" style="margin-bottom: 40px;">Sosial Media</h3>

		<div style="padding-left: 300px;">
			<div class="row justify-content-center">
				<div class="col-4 text-center">
					<i class="fas fa-envelope fa-3x" style="color: #D44638;"></i>
					<p style="margin-top: 10px; margin-bottom: 20px;"><b>Email :</b> <br><?= $d->email ?></p>
				</div>
				<div class="col-4 text-center">
					<a href="https://www.facebook.com/sdn21bandarbuat" target="_blank" style="text-decoration: none; color: #4267B2;">
						<i class="fab fa-facebook fa-3x"></i>
						<p style="margin-top: 10px;"><b>Facebook</b><br>Sdnduasatu Bandarbuat</p>
					</a>
				</div>
				<div class="col-4 text-center">
					<a href="https://www.instagram.com/sdn21bandarbuat/" target="_blank" style="text-decoration: none; color: #E1306C;">
						<i class="fab fa-instagram fa-3x"></i>
						<p style="margin-top: 10px;"><b>Instagram</b><br>Sdn21bandarbuat</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>

<!-- Tambahkan link Font Awesome di bagian header.php -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">