
<?php
//Array Associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "M Haikal A",
        "nrp" => "233040083",
        "email" => "nadziffa123@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpeg"
    ],
    [
        "nama" => "Noval Farhan ",
        "nrp" => "233040119",
        "email" => "nohaiovay345@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "opay.jpeg"
    ],
    [
        "nama" => "Sufi Nsdzifa",
        "nrp" => "233040083",
        "email" => "haikalabi29@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sufi.jpeg"
    ],
    [
        "nama" => "Hilmy Ciparay",
        "nrp" => "233040047",
        "email" => "adasaja2134@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.jpeg"
    ],
    [
        "nama" => "Daffa Al Bani",
        "nrp" => "233040066",
        "email" => "daffaalbani56@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dapa.jpeg"
    ],
    [
        "nama" => "Dzikri",
        "nrp" => "233040052",
        "email" => "dzikrie77gacor@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dzikri.jpeg"
    ],
    [
        "nama" => "Rafi Safiq Mulyadi",
        "nrp" => "23304023",
        "email" => "safiq556@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "safiq.jpeg"
    ],
    [
        "nama" => "Ghani",
        "nrp" => "233040049",
        "email" => "ghanialiyandi12345@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "gani.jpeg"
    ],
    [
        "nama" => "M. Wilmar Rizky",
        "nrp" => "233040050",
        "email" => "wilmarardhana9@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "siwil.jpeg"
    ],
    [
        "nama" => "Joshua",
        "nrp" => "233040064",
        "email" => "joshuajeremia@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jo.jpeg"
],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?= $mhs["nrp"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>
