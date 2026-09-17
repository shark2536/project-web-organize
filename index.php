<!-- 
Nama: Muhammad Raffa Elvano
Kelas: XI PPLG 3 
-->

<?php
    require_once('config/connection.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hey King!</h1>
    <script src="assets/js/hello.js"></script>
    <?php
        global $namaDariPHP;
        $panggil = new Config();
        $panggil->latihan();
        echo "Nama: " . $namaDariPHP;
    ?>
    <br>
    <img src="assets/images/monyet.jfif" alt="Gambar Monyet">
</body>
</html>