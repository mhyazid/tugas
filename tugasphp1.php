<?php
$nama='Muhammad Hadyan Yazid';
$nick=['Hadyan','Yazid'];
$kelamin='Laki-laki';
$tgllahir='19 Agustus 2002';
$t4lahir='Medan, Sumatera Utara';
$alamat='Medan, Sumatera Utara';
$sd='SDN 060884';
$smp='SMPIT Al-Fityan Medan';
$sma='SMAIT Al-Fityan Medan';
$univ='Universitas Mikroskil';
$hobi=['Membaca Novel', 'Bermain Games'];
$email='hadyanmerdeka@gmail.com';
$telp='081262169935';
$ig='mhyazid';
$linkimg='https://github.com/mhyazid/tugas/blob/9dff7508848d383fa0db0bffd6e47317acf27e1e/src/hadyan.jpg?raw=true';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .profile-img {
            border-radius: 50%;
            width: 100%;
            max-width: 200px;
        }
    </style>
</head>
<body>
    <!-- Main content div -->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Biodata</h1>
                <ul>
                    <li><strong>Nama:</strong> <?= $nama?></li>
                    <li><strong>Nama Panggilan:</strong> <?= $nick[0].' atau '.$nick[1]?></li>
                    <li><strong>Jenis Kelamin:</strong> <?= $kelamin?></li>
                    <li><strong>Tanggal Lahir:</strong> <?= $tgllahir?></li>
                    <li><strong>Tempat Lahir:</strong> <?= $t4lahir?></li>
                    <li><strong>Alamat:</strong> <?= $alamat?></li>
                    <li><strong>Pendidikan:</strong>
                        <ul>
                            <li>SD : <?= $sd?></li>
                            <li>SMP : <?= $smp?></li>
                            <li>SMA : <?= $sma?></li>
                            <li>Universitas : <?= $univ?></li>
                        </ul>
                    </li>
                    <li><strong>Hobby & Minat:</strong> <?= $hobi[0].' dan '.$hobi[1]?></li>
                </ul>
            </div>
            <div class="col-md-3 py-5">
                <!-- Foto profil -->
                <img src="<?= $linkimg?>" alt="Profile Picture" class="profile-img">
            </div>
        </div>
    </div>

    <!-- Contact Info -->
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Kontak Informasi</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item">Email: <?= $email?></li>
                    <li class="list-group-item">Telepon/Wa: <?= $telp?></li>
                    <li class="list-group-item">Instagram: <a href="https://www.instagram.com/<?=$ig?>/" target="_blank"><?= '@'.$ig?></a></li>
                </ul>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>