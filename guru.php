<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }
        .text-center {
            text-align: center;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .col-md-4 {
            flex: 0 0 30%;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card-img-top {
            width: 100%;
            height: auto;
        }
        .card-body {
            padding: 15px;
        }
        .card-title {
            font-size: 1.25em;
            margin: 0 0 10px;
        }
        .card-text {
            margin-bottom: 15px;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>

<div class="section">
    <div class="container">
        <h3 class="text-center">Tentang Guru</h3>
        <div class="row">
            <?php
            $guru = mysqli_query($conn, "SELECT * FROM guru ORDER BY id_guru DESC");
            if(mysqli_num_rows($guru) > 0) {
                while($g = mysqli_fetch_array($guru)) {
            ?>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="uploads/guru/<?= $g['gambar'] ?>" alt="<?= $g['nama'] ?>">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= $g['nama'] ?></h5>
                        <center>
						<p class="card-text"><?= $g['keterangan'] ?></p>
						</center>
                    </div>
                </div>
            </div>
            <?php }} else { ?>
            <p class="text-center col-12">Tidak ada Data</p>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
