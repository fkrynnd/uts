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
                    <form action="storedata.php" method="post">
                        <div class="mb-3">
                            <label for="idjadwal" class="form-label">ID Jadwal</label>
                            <input type="text" class="form-control" id="idjadwal" name="idjadwal">
                        </div>
                        <div class="mb-3">
                            <label for="kddosen" class="form-label">Nama Dosen</label>
                            <select id="kddosen" name="kddosen" class="form-select">
                                <option selected disabled>Pilih Dosen</option>
                                <?php
                                $result = $model->show_dosen();
                                if (!empty($result)) {
                                foreach ($result as $data) : ?>
                                <option value="<?= $data->kodedosen ?>"><?= $data->namadosen ?></option>
                                <?php endforeach;
                            }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label">Hari</label>
                            <input type="text" class="form-control" id="hari" name="hari">
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun Akademik</label>
                            <input type="text" class="form-control" id="tahun" name="tahun">
                        </div>
                        <div class="mb-3">
                            <label for="smt" class="form-label">Semester</label>
                            <input type="text" class="form-control" id="smt" name="smt">
                        </div>
                        <div class="mb-3">
                            <label for="kdmk" class="form-label">Mata Kuliah</label>
                            <select id="kdmk" name="kdmk" class="form-select">
                                <option selected disabled>Pilih Mata Kuliah</option>
                                <?php
                                $result = $model->show_matkul();
                                if (!empty($result)) {
                                foreach ($result as $data) : ?>
                                <option value="<?= $data->kodemk ?>"><?= $data->namamk ?></option>
                                <?php endforeach;
                            }
                            ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sesi" class="form-label">Sesi</label>
                            <input type="text" class="form-control" id="sesi" name="sesi">
                        </div>

                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas">
                        </div>
                        <div class="mb-3">
                            <label for="ruang" class="form-label">Ruang</label>
                            <input type="text" class="form-control" id="ruang" name="ruang">
                        </div>
                        <div class="mb-3">
                            <label for="kelassesi" class="form-label">Kelas Sesi</label>
                            <input type="text" class="form-control" id="kelassesi" name="kelassesi">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="check_out" onchange="document.getElementById('store').disabled = !this.checked;">
                            <label class="form-check-label" for="exampleCheck1">Simpan Data!</label>
                        </div>
                        <button type="submit" id="store" name="store_jadwal" class="btn btn-primary" disabled>Submit</button>
                        <button onclick="goBack()" class="btn btn-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/sweetalert.min.js"></script>
    </body>

</html> 
