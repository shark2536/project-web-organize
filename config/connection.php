<!-- 
Nama: Muhammad Raffa Elvano
Kelas: XI PPLG 3
-->

<?php
class Config {
    function latihan() {
        global $namaDariPHP;
        $namaDariPHP = "Monyet";
        $namaVariabel = "<h1> Halo King! (Dari PHP) </h1>";
        echo $namaVariabel;

    }

    function koneksi() {
        $koneksi = mysqli_connect("localhost","root","");
        mysqli_select_db($koneksi,"siswa_db");


        if($koneksi) {
            echo "<br> Anda Berhasil Terhubung Ke-Database! <br>";
        }else {
            mysqli_connect_errno();
        }
        return $koneksi;
    }
}
?>