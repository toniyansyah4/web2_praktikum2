<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : "";

$nim =  (isset($_POST['nim'])) ? $_POST['nim'] : NULL;
$nama =   (isset($_POST['nama'])) ? $_POST['nama'] : NULL;
$matkul = (isset($_POST['matkul'])) ? $_POST['matkul'] : NULL;
$uts =  (isset($_POST['uts'])) ? $_POST['uts'] : NULL;
$uas =   (isset($_POST['uas'])) ? $_POST['uas'] : NULL;
$nilai_tugas = (isset($_POST['nilai_tugas'])) ? $_POST['nilai_tugas'] : NULL;

$data = [
    [
        "nim" => 121212,
        "nama" => "Toniyansyah Wahyudi",
        "matkul" => "Basis Data",
        "uts" => 80,
        "uas" => 86,
        "nilai_tugas" => 83,
    ],
    [
        "nim" => 3242,
        "nama" => "Joko",
        "matkul" => "WEB",
        "uts" => 10,
        "uas" => 10,
        "nilai_tugas" => 12,
    ],
    [
        "nim" => 021212,
        "nama" => "Toniyansyah Wahyudi",
        "matkul" => "Basis Data",
        "uts" => 80,
        "uas" => 86,
        "nilai_tugas" => 83,
    ],
    [
        "nim" => $nim,
        "nama" => $nama,
        "matkul" => $matkul,
        "uts" => $uts,
        "uas" => $uas,
        "nilai_tugas" => $nilai_tugas,
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .menu {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #EFF5FB;
            color: #0091AD;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php

    switch ($page) {
        case 'form':
            include "form_nilai.php";
            break;
        case '':
            require_once 'libfungsi.php';
            include "array_siswa.php";
            break;
    }
    ?>
    <div class="menu">
        <h3>@toniyansyah4</h3>
    </div>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>