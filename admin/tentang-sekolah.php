<?php include 'header.php' ?>



<!-- content -->
<div class="content">

	<div class="container">

		<div class="box">

			<div class="box-header">
				Tentang Sekolah
			</div>

			<div class="box-body">

				<?php 
				if(isset($_GET['succes'])){

					echo "<div class='alert alert-succes'>".$_GET['succes']."</div>";
				}

				?>

				<form action="" method="POST" enctype="multipart/form-data">

					<div class="form-group">
					<label>Tentang Sekolah</label>
					<textarea name="tentang" class="input-control" placeholder="Tentang Sekolah" id="mytextarea"> <?= $d->tentang_sekolah ?> </textarea>
					</div>

					<div class="form-group">
					<label>Foto Sekolah</label>
					<img src= "../uploads/identitas/<?= $d->foto_sekolah?>" width="200px" class="image">
					<input type="hidden" name="foto_lama" value="<?= $d->foto_sekolah ?> ">
					<input type="file" name="foto_baru" class="input-control">
				</div>


				<button type="button" class="btn" onclick="window.location = 'index.php'">Kembali</button>	
				<input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-blue">

			</form>

			<?php

			if (isset($_POST['submit'])) {

				
				$tentang   = addslashes($_POST['tentang']) ;
				$currdate = date('Y-m-d H:i;s');


					//menampung dan validasi data foto sekolah
					if($_FILES['foto_baru']['name'] != ''){


					$filename = $_FILES['foto_baru']['name'];
					$tmpname = $_FILES['foto_baru']['tmp_name'];
					$filesize = $_FILES['foto_baru']['size'];

					$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
					$rename	= 'sekolah'.time().'.'.$formatfile;

					$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

					if(!in_array($formatfile, $allowedtype)){

					echo '<div class=" alert alert-error"> Format File foto Tidak Diizinkan </div> ' ;	

					return false;

					}elseif($filesize > 5000000 ){

						echo '<div class=" alert alert-error"> Ukuran File foto Tidak Boleh Lebih Dari 5 MB </div> ' ;

						return false;

					}else{

					if(file_exists("../uploads/identitas/".$_POST['foto_lama'])){

						unlink("../uploads/identitas/".$_POST['foto_lama']);
					}

					move_uploaded_file($tmpname, "../uploads/identitas/".$rename) ;

				}

				} else{

					$rename = $_POST['foto_lama'] ;
				}

				

				$update = mysqli_query($conn, "UPDATE pengaturan SET 
					tentang_sekolah = '".$tentang."',
					foto_sekolah = '".$rename."',
					updated_at = '".$currdate."'
					WHERE id = '".$d->id."' 
					");

				

				if($update){
					echo "<script>window.location='tentang-sekolah.php?succes=Edit Data Berhasil'</script>";

				}else {
					echo 'gagal edit'.mysqli_error($conn);
				}

			}

			?>

			</div>

		</div>		

</div>

</div>
<?php include 'footer.php' ?>
