<?php include 'header.php'; ?>

<!-- content -->
<div class="content">

	<div class="container">

		<div class="box">

			<div class="box-header">
				Kepsek
			</div>

			<div class="box-body">

				<a href="tambah-kepsek.php" class="text-green"><i class="fa fa-plus"> </i>Tambah</a>
				
				<?php 
				if(isset($_GET['success'])){
					echo "<div class='alert alert-success'>".$_GET['success']."</div>";
				}
				?>

				<form action="">
					<div class="input-group">
						<input type="text" name="key" placeholder="Pencarian">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>

				<table class="table"> 
					<thead> 
						<tr>
							<th>No</th>
							<th>Foto</th>
							<th>Nama</th>
							<th>Kata</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						$no = 1;

						$where = " WHERE 1=1 ";
						if(isset($_GET['key'])) {
							$where .= " AND nama_kepsek LIKE '%".addslashes($_GET['key'])."%' ";
						}

						$kepsek = mysqli_query($conn, "SELECT * FROM kepsek $where ORDER BY id_kepsek DESC");
						if(mysqli_num_rows($kepsek) > 0 ) {
							while($p = mysqli_fetch_array($kepsek)){
						?>

						<tr>
							<td><?= $no++ ?></td>
							<td><img src="../uploads/kepsek/<?= $p['foto_kepsek'] ?>" width="100px"></td>
							<td><?= $p['nama_kepsek'] ?></td>
							<td><?= $p['kata'] ?></td>
							<td>
								<!-- <a href="edit-kepsek.php?id=<?= $p['id_kepsek'] ?>" title="Edit Data">edit <i class="fa fa-edit"></i></a> | -->
								<a href="hapus-kepsek.php?id=<?= $p['id_kepsek'] ?>" onclick="return confirm('Apakah Anda Yakin Untuk Hapus Data?')" title="Hapus Data" class="text-red">hapus <i class="fa fa-trash"></i></a>
							</td>
						</tr>
						<?php }} else { ?>

						<tr>
							<td colspan="5">Data Tidak Ada</td>
						</tr>
						<?php } ?>
					</tbody>

				</table>

			</div>

		</div>		

	</div>

</div>
<?php include 'footer.php'; ?>
