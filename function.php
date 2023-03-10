<?php 
    require_once __DIR__ . "./koneksi.php";

    function ambilData(){
        $koneksi = koneksi();
        $sql ="SELECT * FROM tugas_arif";
        $result = $koneksi->query($sql);
        return $result;
    }

    function tambahData($nama_tugas,$deadline){
        $koneksi = koneksi();
        $sql ="INSERT INTO `tugas_arif`(`nama_tugas`, `deadline`) VALUES ('$nama_tugas','$deadline')";
        $tambah = $koneksi->exec($sql);
        return $tambah;
    }

    function hapusData($id){
        $koneksi = koneksi();
        $sql ="DELETE FROM `tugas_arif` WHERE id_tugas = $id";
        $result = $koneksi->exec($sql);
        return $result;
    }

    function ambil1Data($id){
        $koneksi = koneksi();
        // $id = $data['id_tugas'];
        $sql ="SELECT * FROM tugas_arif WHERE id_tugas=$id";
        $result = $koneksi->query($sql);
        return $result;
    }

    function editData($id, $tugas, $deadline)
{
    $koneksi = koneksi();
    $sql = "UPDATE `tugas_arif` SET `nama_tugas`='$tugas',`deadline`='$deadline' WHERE id_tugas = $id";
    $result = $koneksi->exec($sql);

    return $result;
}


?>