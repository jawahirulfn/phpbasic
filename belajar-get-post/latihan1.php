<?php
// $mahasiswa = [
//     ["jawahirul", "09020621036", "kyuraz29@gmail.com", "sistem informasi"],
//     ["Novi", "1234411", "novicantik12@gmail.com", "Biologi"]
// ];

// ARRAY ASSOCIATIVE
// key nya adalah string yang kita buat sendiri
// array yang indexnya kita tentukan sendiri
$mahasiswa = [
    [
        "nama" => "Muhammad Jawahirul Fanani",
        "nrp" => "12765137",
        "email" => "Jawahirulfn029@gmail.com",
        "jurusan" => "Biologi",
        "nilai" => [["indonesia", 67], ["inggris", 100], ["jawa", 50]]
    ],
    [
        "nama" => "Nayanika Eunoia Jatmika",
        "nrp" => "0363636",
        "email" => "Eunoiacans@gmail.com",
        "jurusan" => "Teknik Informatika",
        "nilai" => [
            ["indonesia", 90],
            ["inggris", 100], ["jawa", 90]
        ]
    ],
    [
        "nama" => "Putri Noviyanti",
        "nrp" => "2929029",
        "email" => "Noviii@gmail.com",
        "jurusan" => "Sistem Informasi",
        "nilai" => [["indonesia", 100], ["inggris", 100], ["jawa", 90]]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) { ?>
            <li>
                <a href="latihan2.php?
                nama=<?= $mhs["nama"]; ?>
                &nrp=<?= $mhs["nrp"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>
                &email=<?= $mhs["email"]; ?>
                ">
                    <?= $mhs["nama"]; ?>
                </a>
            </li>
            <br>
        <?php } ?>
    </ul>
</body>

</html>