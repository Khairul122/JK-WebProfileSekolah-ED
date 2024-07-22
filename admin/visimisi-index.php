<?php include 'header.php'; ?>

<!-- content -->
<div class="content">

    <div class="container">

        <div class="box">

            <div class="box-header">
                Visi dan Misi
            </div>

            <div class="box-body">

                <a href="tambah-visimisi.php" class="text-green"><i class="fa fa-plus"> </i>Tambah</a>
                
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
                            <th>Visi</th>
                            <th>Misi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $no = 1;

                        $where = " WHERE 1=1 ";
                        if(isset($_GET['key'])) {
                            $where .= " AND visi LIKE '%".addslashes($_GET['key'])."%' ";
                        }

                        $visimisi = mysqli_query($conn, "SELECT * FROM visimisi $where ORDER BY id_visimisi DESC");
                        if(mysqli_num_rows($visimisi) > 0 ) {
                            while($p = mysqli_fetch_array($visimisi)){
                        ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $p['visi'] ?></td>
                            <td><?= $p['misi'] ?></td>
                            <td>
                            <a href="edit-visimisi.php?id=<?= $p['id_visimisi'] ?>" title="Edit Data">edit <i class="fa fa-edit"></i></a> |

                                <!-- <a href="hapus-visimisi.php?id=<?= $p['id_visimisi'] ?>" onclick="return confirm('Apakah Anda Yakin Untuk Hapus Data?')" title="Hapus Data" class="text-red">hapus <i class="fa fa-trash"></i></a> -->
                            </td>
                        </tr>
                        <?php }} else { ?>

                        <tr>
                            <td colspan="4">Data Tidak Ada</td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>

        </div>      

    </div>

</div>
<?php include 'footer.php'; ?>
