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
            <h2>Selamat Datang Di Mana Hayo...</h2>
            <h3>Tambah Daftar Siswa / Sekolah</h3>

            <form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="nama">Nama </label>
                    <input type="text" class="form-control" id="nama" name="nama" required>

                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control" name="file" id="logo" required>
                </div>

                <button type="submit" class="btn btn-outline-success">Simpan</button>
            </form>

</body>
</div>
</div>


</html>
<script src="assets/jquery-3.4.1.slim.min.js"></script>
<script src="assets/bootstrap.min.js"></script>