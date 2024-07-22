<?php include 'header.php' ?>

<!-- content -->
<div class="content">

	<div class="container">

		<div class="box">

			<div class="box-header">
				Dashboard
			</div>

			<div class="box-body">
			<h3>
    			Selamat Datang <?= isset($_SESSION['uname']) ? htmlspecialchars($_SESSION['uname']) : '' ?>, Di Panel Admin <?= $d->nama ?> </h3>

			</div>

		</div>		

</div>

</div>

<?php include 'footer.php' ?>
