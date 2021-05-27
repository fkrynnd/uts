<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function show_absen()
    {
        $sql = "SELECT * FROM tblabsen JOIN tbldosen ON tblabsen.kodedosen = tbldosen.kodedosen"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function show_matkul()
    {
        $sql = "SELECT * FROM tblmkuliah JOIN tblprodi ON tblmkuliah.kodeprodi = tblprodi.kodeprodi"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function show_dosen()
    {
        $sql = "SELECT * FROM tbldosen JOIN tblprodi ON tbldosen.kodeprodi = tblprodi.kodeprodi"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function show_jadwal()
    {
        $sql = "SELECT * FROM tbljadwal JOIN tbldosen ON tbljadwal.kodedosen = tbldosen.kodedosen JOIN tblmkuliah ON tbljadwal.kodemk=tblmkuliah.kodemk"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function show_prodi()
    {
        $sql = "SELECT * FROM tblprodi"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] =$obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }

    public function create_prodi($kdprodi, $nmprodi)
    {
        $sql = "INSERT INTO tblprodi (kodeprodi, namaprodi) VALUES
        ('$kdprodi', '$nmprodi')";
        $this->conn->query($sql);
    }

    public function create_absen($kdprodi, $nmprodi)
    {
        $sql = "INSERT INTO tblprodi (kodeprodi, namaprodi) VALUES
        ('$kdprodi', '$nmprodi')";
        $this->conn->query($sql);
    }

    public function create_mkuliah($kdmkuliah, $nmmkuliah, $sks, $smt, $kdprodi)
    {
        $sql = "INSERT INTO tblmkuliah (kodemk, namamk, sks, smt, kodeprodi) VALUES
        ('$kdmkuliah', '$nmmkuliah', '$sks', '$smt', '$kdprodi')";
        $this->conn->query($sql);
    }

    public function create_dosen($kddosen, $nidn, $nip, $nmdosen, $kdprodi)
    {
        $sql = "INSERT INTO tbldosen (kodedosen, nidn, nip, namadosen, kodeprodi) VALUES
        ('$kddosen', '$nidn', '$nip', '$nmdosen', '$kdprodi')";
        $this->conn->query($sql);
    }

    public function create_jadwal($jadwalid, $kddosen, $hari, $thn, $smt, $kdmk, $sesi, $masuk, $keluar, $kelas, $ruang, $status, $kelassesi)
    {
        $sql = "INSERT INTO tbljadwal (jadwalid, kodedosen, hari, thnakademik, semester, kodemk, sesi, jammasuk, jamkeluar, kelas, ruang, status, kelassesi) VALUES
        ('$jadwalid', '$kddosen', '$hari', '$thn', '$smt', '$kdmk', '$sesi', '$masuk', '$keluar', '$kelas', '$ruang', '$status', '$kelassesi')";
        $this->conn->query($sql);
    }

    public function delete_dosen($kddosen)
    {
        $sql = "DELETE FROM tbldosen WHERE kodedosen='$kddosen'";
        $this->conn->query($sql);
    }

    public function delete_prodi($kdprodi)
    {
        $sql = "DELETE FROM tblprodi WHERE kodeprodi='$kdprodi'";
        $this->conn->query($sql);
    }

    public function delete_matkul($kdmk)
    {
        $sql = "DELETE FROM tblmkuliah WHERE kodemk='$kdmk'";
        $this->conn->query($sql);
    }

    public function delete_jadwal($jdlid)
    {
        $sql = "DELETE FROM tbljadwal WHERE jadwalid='$jdlid'";
        $this->conn->query($sql);
    }
}