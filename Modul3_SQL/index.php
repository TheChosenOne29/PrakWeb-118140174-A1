<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index data mahasiswa</title>
</head>

<body>
    <?php if(isset($_GET['insertData']) && $_GET['insertData'] == 1){
        ?>
    <p>Berhasil menambah data</p>

<?php
    }
?>

    <form action="insert.php" method="post">
        <label>NRP</label>
        <input type="text" name="nrp">

        <label>Nama</label>
        <input type="text" name="nama">

        <label>Alamat</label>
        <input type="text" name="alamat">
        
        <label>Foto</label>
        <input type="text" name="foto">

        <label>Jurusan</label>
        <select class="form-control" name="Jurusan">
            <option value="998IF">Informatika</option>
            <option value="487EL">Elektronika</option>
            <option value="521KM">Ilmu Komputer</option>
            <option value="054SI">Sistem Informasi</option>
        </select>

        <input type="submit" name="submitData" value="Tambah data!">
    </form>

    <hr>
    <h3>Cari nama</h3>

        <?php if(isset($_GET['delete']) && $_GET['delete'] == 1){ ?>
            <p>Berhasil Menghapus Data.</p>
        <?php } ?>

        <?php include 'connection.php'; 

            if(isset($_GET['search'])){
                $cari = $_GET['search']; 
                $getData = mysqli_query($koneksi, "SELECT * FROM mahasiswa JOIN jurusan ON mahasiswa.jurusan = jurusan.ID_Jur WHERE nama LIKE '%".$cari."%'") or die(mysqli_error());
            } else {
                $getData = mysqli_query($koneksi, "SELECT * FROM mahasiswa, jurusan WHERE mahasiswa.jurusan = jurusan.ID_Jur ") or die(mysqli_error());
            }
        ?>

        <br>

        <form action="" method="get" class="mb-5">
                <input type="text" name="search" placeholder="Cari Nama" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>" class="form-control">
            <input class="" type="submit" value="cari">
        </form>

        <table class="table">
            <tr>
                <th>NRP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>

            <?php while($data = mysqli_fetch_array($getData)){ ?>
                <tr>
                    <th> <?php echo $data['nrp'] ?> </th>
                    <th> <?php echo $data['nama'] ?> </th>
                    <th> <?php echo $data['alamat'] ?> </th>
                    <th> <?php echo $data['foto'] ?> </th>
                    <th> <?php echo $data['Nama_Jurusan'] ?> </th>
                    <th> 
                    <a href="delete.php?nomor=<?php echo $data['nrp']; ?>"> Delete </a> ||
                    <a href="update.php?nrp=<?php echo $data['nrp']; ?>"> edit </a>
                    </th>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>
</html>