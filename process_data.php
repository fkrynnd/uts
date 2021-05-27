<?php
    include 'model.php';

    if (isset($_GET['kddosen'])) {
        $kddosen = $_GET['kddosen'];
        $model = new Model();
        $model->delete_dosen($kddosen);
        header('location:dosen.php');
    }
    if (isset($_GET['kdprodi'])) {
        $kdprodi = $_GET['kdprodi'];
        $model = new Model();
        $model->delete_prodi($kdprodi);
        header('location:prodi.php');
    }
    if (isset($_GET['kdmk'])) {
        $kdmk = $_GET['kdmk'];
        $model = new Model();
        $model->delete_matkul($kdmk);
        header('location:prodi.php');
    }
    if (isset($_GET['jadwalid'])) {
        $jdlid = $_GET['jadwalid'];
        $model = new Model();
        $model->delete_jadwal($jdlid);
        header('location:prodi.php');
    }
?>