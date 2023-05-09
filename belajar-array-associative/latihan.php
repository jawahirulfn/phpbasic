<?php 

$mahasiswa = [
    [
        "name" => "udin",
        "nrp" => "131413",
        "nilai" => [90, 76, 88]
    ], 
    [
        "name" => "Jamal",
        "nrp" => "14022",
        "nilai" => [45, 51, 96]
    ]
];

$buah = [
    [
        "nama" => "anggur",
        "warna" => "ungu",
        "jumlah" => [1, 2, 3]
    ],
    [
        "nama" => "semangka",
        "warna" => "merah",
        "jumlah" => [4, 5, 6]
    ]
    ];

foreach($mahasiswa as $students => $value) {
    echo $value['name']."<br>";
    echo "nilai: " . implode(", ", $value["nilai"])."\n";
    echo "<br><br>";
}

foreach($buah as $fruit => $value) {
    echo "Nama : ".$value['nama']."<br>";
    echo "Warna : ".$value['warna']."<br>";
    echo "jumlah : " . implode(", ", $value['jumlah'])."\n";
    echo "<br><Br>";
}
?>