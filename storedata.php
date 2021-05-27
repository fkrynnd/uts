<?php
    include 'model.php';

    if (isset($_POST['store_prodi'])) {
        $kdprodi = $_POST['kdprodi'];
        $nmprodi = $_POST['nmprodi'];
        
        $model = new Model();
        $model->create_prodi($kdprodi, $nmprodi);
        header('location:prodi.php');
    }
    if (isset($_POST['store_dosen'])) {
        $kddosen = $_POST['kddosen'];
        $nidn = $_POST['nidn'];
        $nip = $_POST['nip'];
        $nmdosen = $_POST['nmdosen'];
        $kdprodi = $_POST['kdprodi'];
        
        $model = new Model();
        $model->create_dosen($kddosen, $nidn, $nip, $nmdosen, $kdprodi);
        header('location:dosen.php');
    }
    if (isset($_POST['store_mkuliah'])) {
        $kdmkuliah = $_POST['kdmkuliah'];
        $nmmkuliah = $_POST['nmmkuliah'];
        $sks = $_POST['sks'];
        $smt = $_POST['smt'];
        $kdprodi = $_POST['kdprodi'];
        
        $model = new Model();
        $model->create_mkuliah($kdmkuliah, $nmmkuliah, $sks, $smt, $kdprodi);
        header('location:matkul.php');
    }
    if (isset($_POST['store_jadwal'])) {
        $jadwalid = $_POST['idjadwal'];
        $kddosen = $_POST['kddosen'];
        $hari = $_POST['hari'];
        $thn = $_POST['tahun'];
        $smt = $_POST['smt'];
        $kdmk = $_POST['kdmk'];
        $sesi = $_POST['sesi'];
        $masuk = $_POST['masuk'];
        $keluar = $_POST['keluar'];
        $kelas = $_POST['kelas'];
        $ruang = $_POST['ruang'];
        $status = $_POST['status'];
        $kelassesi = $_POST['kelassesi'];
        
        $model = new Model();
        $model->create_jadwal($jadwalid, $kddosen, $hari, $thn, $smt, $kdmk, $sesi, $masuk, $keluar, $kelas, $ruang, $status, $kelassesi);
        header('location:jadwal.php');
    }
?>