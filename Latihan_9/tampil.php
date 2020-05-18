<?php
include 'database.php';
$mysqli = new Databases();

?>
<html>
<title>
    Latihan 9_02734
</title>

<head>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>

<body>
    <div class="container-sm">


        <div class="blockquote">
            <br>

            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <a class="navbar-brand" href="index.php">CRUD - PDO ( 02734 )</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tampil.php">Sekolah</a>
                        </li>

                    </ul>

                </div>
            </nav>
            <br>
            <br>
            <h3>Data Sekolah</h3>
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>FOTO</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($mysqli->tampilkan() as $tampils) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $tampils['nama'] ?></td>
                            <td><?php echo $tampils['alamat'] ?></td>
                            <td>
                                <img src="assets/logo/<?php echo $tampils['logo']; ?>" class="img-circle" width="100"></td>
                            <td>
                                <a href="pdf.php?id=<?php echo $tampils['id']; ?>" target="_blank" class="btn btn-warning"> PDF </a>
                                <a href="cetak.php?id=<?php echo $tampils['id']; ?>" class="btn btn-warning"> Download </a>
                                <a href="edit.php?id=<?php echo $tampils['id']; ?>&aksi=update" class="btn btn-warning"> EDIT </a>
                                <a href="proses.php?id=<?php echo $tampils['id']; ?>&aksi=hapus" class="btn btn-warning"> HAPUS </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</body>

</html>
<script src="assets/jquery-3.4.1.slim.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>