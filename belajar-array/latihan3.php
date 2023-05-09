<?php 
$mahasiswa=[["Jawahirul", "09020621036", "Sistem Informasi", "kyuraz029@gmail.com"]
, ["Novi", "1234567", "Biologi", "Putrinovi14@gmail.com"], ["Aliya", "874821144", "Arsitek", "aliyacans@gmail.com"]]
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
    <li>Nama :  <?php echo $mhs[0]; ?></li>
    <li>NIM :   <?php echo $mhs[1]; ?></li>
    <li>Jurusan :   <?php echo $mhs[2]; ?></li>
    <li>Email : <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>

</body>
</html>