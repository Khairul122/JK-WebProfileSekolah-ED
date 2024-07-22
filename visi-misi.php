<?php include 'header.php'; ?>

<div class="section" style="background-color: white;">
    <div class="container">
        <h3 class="text-center">Visi dan Misi Sekolah</h3>

        <?php
       	include 'koneksi.php';
        // Query untuk mengambil data visi dan misi
        $sql = "SELECT visi, misi FROM visimisi LIMIT 1"; // Ubah LIMIT sesuai kebutuhan
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Menampilkan data
            while ($row = $result->fetch_assoc()) {
                echo '<div class="visi-misi">';
                echo '<h4 class="text-center">VISI</h4>';
                echo '<p>' . $row["visi"] . '</p>';
                echo '<h4 class="text-center">MISI</h4>';
                echo '<p>' . $row["misi"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
