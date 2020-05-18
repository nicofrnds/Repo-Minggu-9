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

            <form action="proses.php?aksi=update" method="post" enctype="multipart/form-data">
                <?php
                foreach ($mysqli->edit($_GET['id']) as $datas) :
                ?>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="nama">Nama </label>
                            <input type="hidden" name="id" value="<?php echo $datas['id'] ?>">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $datas['nama']; ?>" required>

                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $datas['alamat']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <img src="assets/logo/<?= $datas['logo']; ?>" class="img-thumbnail" style="width:30%;">
                            <input type="file" class="form-control" name="file" id="logo" value="<?= $datas['logo']; ?>">
                        </div>


                        <td><input type="submit" class="btn btn-outline-success" value="Simpan"></td>
                    </div>

                <?php endforeach ?>
            </form>
        </div>
    </div>
</body>

</html>