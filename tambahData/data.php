<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reliz-able | Tambah Data</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="../asset/img/favicon.ico">

    <!-- import CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/css/tabelDataStyle.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="../index.php">
                <img src="../asset/img/logo.png" class="img-fluid" alt="Logo" width="65px">
            </a>
            <a class="navbar-brand ms-4" href="../index.php">
                <img src="../asset/img/logonya.png" class="img-fluid ms-3" alt="Logo" width="65px">
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto"></ul>
                <ul class="navbar-nav me-3">
                    <li class="nav-item d-flex">
                        <a class="nav-link light me-4" aria-current="page" href="#">INFORMATION</a>
                        <a class="nav-link light me-4" aria-current="page" href="#">KONTAK</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" id="tambahData" href="tambahData.html">Tambah Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar END -->

    <!-- Tabel Data -->
    <div class="container-fluid" id="cont">
        <div class="card my-5" style="min-height: 800px; border-radius: 30px;">
            <div class="row mt-5 px-3 d-flex">
                <div class="col-sm d-flex justify-content-between">
                    <h3>Tabel Data</h3>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                        <i class="fa-solid fa-plus"></i> Tambah Data
                    </button>
                </div>
            </div>
            <div class="row mt-3 px-3">
                <table id="example" class="display nowrap table table-striped table-bordered table-sm" style="width:100%">
                    <thead>
                        <tr>
                            <th>Minggu</th>
                            <th>Tanggal</th>
                            <th>Highlight</th>
                            <th>Deskripsi</th>
                            <th>Intro</th>
                            <th>Project Gambar</th>
                            <th>Project Deskripsi</th>
                            <th>Kesan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    include('../config.php');
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM data");
                    ?>
                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $row['tanggal']; ?>
                                </td>
                                <td class="text-center">
                                    <img src="../asset/img/highlight/<?= $row['highlight']; ?>" style="width: 120px;">
                                </td>
                                <td>
                                    <?= $row['deskripsi']; ?>
                                </td>
                                <td>
                                    <?= $row['intro']; ?>
                                </td>
                                <td class="text-center">
                                    <img src="../asset/img/project_gambar/<?= $row['project_gambar']; ?>" style="width: 120px;">
                                </td>
                                <td>
                                    <?= $row['project_deskripsi']; ?>
                                </td>
                                <td>
                                    <?= $row['kesan']; ?>
                                </td>
                                <td>
                                    <a href="editData.php?edit=<?= $row['minggu']; ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                    <a href="delete.php?minggu=<?= $row['minggu']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')"><i class="fa-solid fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- Tabel Data END -->

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahDataLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="koneksi.php" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" class="form-control" name="tanggal" placeholder="Tanggal">
                        </div>
                        <div class="form-group mb-3">
                            <label for="highlight" class="form-label">Highlight</label>
                            <input class="form-control" type="file" name="highlight">
                        </div>
                        <div class="form-group mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="5" rows="3" placeholder="Deskripsi"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="intro">Intro</label>
                            <input type="text" class="form-control mb-3" name="intro" placeholder="Intro">
                        </div>
                        <div class="form-group mb-3">
                            <label for="project_gambar" class="form-label">Project Gambar</label>
                            <input class="form-control" type="file" name="project_gambar[]" id="project_gambar" multiple>
                        </div>
                        <div class="form-group mb-3">
                            <label for="project_deskripsi">Project Deskripsi</label>
                            <textarea class="form-control" name="project_deskripsi" id="project_deskripsi" cols="5" rows="3" placeholder="Project Deskripsi"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kesan">Kesan</label>
                            <textarea class="form-control" name="kesan" id="kesan" cols="5" rows="3" placeholder="Kesan"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Tambah Data END -->

        <!-- import JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="../asset/js/script.js"></script>
        <script src="../asset/js/tabelData.js"></script>
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
        script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</body>

</html>