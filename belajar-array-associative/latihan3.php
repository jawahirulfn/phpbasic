<?php 
$mahasiswa = [
    [
        "nama" => "Jawahirul",
        "nim" => "09020621036",
        "email" => "Jawahirul@gmail.com",
        "jurusan" => "Sistem Informasi",
        "nilai" => [90, 80, 100]
    ],
    [
        "nama" => "Novi",
        "nim" => "09020621040",
        "email" => "Novi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "nilai" => [90, 90, 90]
    ],
    [
        "nama" => "Eunoia",
        "nim" => "140289",
        "email" => "Eunoiacantik@gmail.com",
        "jurusan" => "Teknik Informatika",
        "nilai" => [90,  96, 89]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) { ?>
        <ul>
            <li>Nama : <?php echo $mhs["nama"] ?></li>
            <li>NIM : <?php echo $mhs["nim"] ?></li>
            <li>Email : <?php echo $mhs["email"] ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
            <li>Nilai : <?php foreach($mhs["nilai"] as $nilai) {
               echo $nilai." ";
            }?></li>

        </ul>
    <?php } ?>
   
</body>
</html>