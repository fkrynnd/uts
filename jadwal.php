<?php
include 'Model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ABSENSI ONLINE</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link"  href="index.php">Absen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="matkul.php">Mata Kuliah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dosen.php">Dosen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="prodi.php">Program Studi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="jadwal.php">Jadwal</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <span class="badge bg-secondary">Data Jadwal</span>
                </div>
                <div class="card-body">
                    <a type="button" class="btn btn-success" href="create_jadwal.php">Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Jadwal</th>
                                <th scope="col">Dosen</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Tahun Akademik</th>
                                <th scope="col">Semester</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Sesi</th>
                                <th scope="col">Jam Masuk</th>
                                <th scope="col">Jam Keluar</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Ruang</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = $model->show_jadwal();
                            if (!empty($result)) {
                                foreach ($result as $data) : ?>
                            <tr>
                                <th scope="row"><?= $index++ ?></th>
                                <td><?= $data->jadwalid ?></td>
                                <td><?= $data->namadosen ?></td>
                                <td><?= $data->hari ?></td>
                                <td><?= $data->tahunakademik ?></td>
                                <td><?= $data->semester ?></td>
                                <td><?= $data->namamk ?></td>
                                <td><?= $data->sesi ?></td>
                                <td><?= $data->jammasuk ?></td>
                                <td><?= $data->jamkeluar ?></td>
                                <td><?= $data->kelas ?></td>
                                <td><?= $data->ruang ?></td>
                                <td><?= $data->status ?></td>
                                <td><?= $data->kelassesi ?></td>
                                <td>
                                    <a name="hapus" id="hapus" href="process_data.php?jadwalid=<?= $data->jadwalid ?>">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;
                            } else { ?>
                                <tr>
                                    <td colspan="9" style="text-align: center;">Belum Ada Data Jadwal</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/sweetalert.min.js"></script>
    </body>

</html> 
