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
        "nama" => "Jarjit",
        "nrp" => "12765137",
        "email" => "jarjit1213@gmail.com",
        "jurusan" => "Biologi",
        "nilai" => [["indonesia", 90], ["inggris", 100], ["jawa", 70]]
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

    <?php foreach($mahasiswa as $mhs) {?>
    <ul>
        <li>Nama: <?php echo $mhs["nama"]; ?></li>
        <li>NIM: <?php echo $mhs["nrp"]; ?></li>
        <li>Email: <?php echo $mhs["email"]; ?></li>
        <li>Jurusan: <?php echo $mhs["jurusan"]; ?></li>
        <li>Nilai: <?php foreach($mhs["nilai"] as $nilai) {
                foreach($nilai as $score) {
                    echo $score. " ";
                }
        } ?></li>
    </ul>
    <?php } ?>
</body>
</html>