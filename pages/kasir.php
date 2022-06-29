<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body bgcolor="#e9f0ff">

    <section class="barang">
        <h2>Data Barang/Produk</h2>
        <form action="barang.php" method="get">
            <a href="../data-barang/form_barang.php" class="btn-tambah">Tambah Data</a>
            <input type="text" name="cari-barang" placeholder="Enter Nama Barang">
            <input type="submit" value="Cari" class="btn-cari">
        </form>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Id Kategori</th>
                <th>Deskripsi</th>
                <th>Jumlah</th>
                <th>Headline</th>
                <th>Tanggal Masuk</th>
                <th>Harga Jual</th>
                <th>Terjual</th>
                <th>Foto</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>

            <?php
                include '../config.php';
                $id_barang = 1;
                

                if(isset($_GET['cari-barang'])){
                    $cari = $_GET['cari-barang'];
                    $ambil_data = mysqli_query($koneksiDB, "SELECT * from tb_barang WHERE nama LIKE '%" . $cari . "%' or headline LIKE '%" . $cari . "%'");
                } else {
                    $ambil_data = mysqli_query($koneksiDB, "select * from tb_barang");
                }

                while($tampilData = mysqli_fetch_array($ambil_data)){
            ?>
                    <tr>
                        <td><?=  $id_barang++; ?></td>
                        <td><?=  $tampilData['nama']; ?></td>
                        <td><?=  $tampilData['id_kategori']; ?></td>
                        <td><?=  $tampilData['deskripsi']; ?></td>
                        <td><?=  $tampilData['jumlah_brg']; ?></td>
                        <td><?=  $tampilData['headline']; ?></td>
                        <td><?=  $tampilData['tgl_masuk']; ?></td>
                        <td><?=  $tampilData['hrg_jual']; ?></td>
                        <td><?=  $tampilData['terjual']; ?></td>
                        <td><?=  $tampilData['foto']; ?></td>
                        <td><?=  $tampilData['stok_barang']; ?></td>
                        <td>
                            <a href="../kasir/add.phpphp?idkasir=<?= $tampilData['kd_barang'];?>" class="btn-edit">Edit</a> | 
                            <a href="../data-barang/hapus_data_barang.php?kd_barang=<?= $tampilData['kd_barang'];?>" class="btn-hapus">hapus</a>
                        </td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
</html>