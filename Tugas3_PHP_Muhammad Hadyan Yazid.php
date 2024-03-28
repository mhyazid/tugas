<?php
$m1=['nama'=>'Hadyan Yazid', 'nim'=>"10011", 'nilai'=>100];
$m2=['nama' => 'John Doe', 'nim' => '10012', 'nilai' => 95];
$m3=['nama' => 'Jane Smith', 'nim' => '10013', 'nilai' => 85];
$m4=['nama' => 'Ahmad Ibrahim', 'nim' => '10014', 'nilai' => 75];
$m5=['nama' => 'Fatimah Ali', 'nim' => '10015', 'nilai' => 80];
$m6=['nama' => 'Budi Santoso', 'nim' => '10016', 'nilai' => 30];
$m7=['nama' => 'Siti Nurhaliza', 'nim' => '10017', 'nilai' => 70];
$m8=['nama' => 'Anwar Sadat', 'nim' => '10018', 'nilai' => 92];
$m9=['nama' => 'Maria Martinez', 'nim' => '10019', 'nilai' => 40];
$m10=['nama' => 'Yusuf Ahmed', 'nim' => '10020', 'nilai' => 69];
$m11=['nama'=>'Miftahul Jannah', 'nim'=>"10021", 'nilai'=>88];
$m12=['nama' => 'Muhammad Iqbal', 'nim' => '10022', 'nilai' => 78];
$m13=['nama' => 'Rina Wati', 'nim' => '10023', 'nilai' => 83];
$m14=['nama' => 'Agus Setiawan', 'nim' => '10024', 'nilai' => 91];
$m15=['nama' => 'Dewi Sartika', 'nim' => '10025', 'nilai' => 60];
$m16=['nama' => 'Rudi Hermawan', 'nim' => '10026', 'nilai' => 73];
$m17=['nama' => 'Nina Julianti', 'nim' => '10027', 'nilai' => 85];
$m18=['nama' => 'Eko Prasetyo', 'nim' => '10028', 'nilai' => 50];
$m19=['nama' => 'Lia Wijaya', 'nim' => '10029', 'nilai' => 82];
$m20=['nama' => 'Dian Rosanti', 'nim' => '10030', 'nilai' => 67];
$m21=['nama'=>'Fajar Nugroho', 'nim'=>"10031", 'nilai'=>77];
$m22=['nama' => 'Rina Fitriani', 'nim' => '10032', 'nilai' => 93];
$m23=['nama' => 'Dodi Setiawan', 'nim' => '10033', 'nilai' => 84];
$m24=['nama' => 'Siti Rahayu', 'nim' => '10034', 'nilai' => 68];
$m25=['nama' => 'Ivan Susanto', 'nim' => '10035', 'nilai' => 76];
$m26=['nama' => 'Nadia Putri', 'nim' => '10036', 'nilai' => 89];
$m27=['nama' => 'Ricky Wijaya', 'nim' => '10037', 'nilai' => 72];
$m28=['nama' => 'Putri Anggraini', 'nim' => '10038', 'nilai' => 79];
$m29=['nama' => 'Rizki Ramadhan', 'nim' => '10039', 'nilai' => 87];
$m30=['nama' => 'Diana Susanti', 'nim' => '10040', 'nilai' => 63];

$mhs=[];

for($i=1; $i<=30;$i++){
    $mhs[]=${"m$i"};
}

$th_judul=["No",'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

$jlh_nilai = array_sum(array_column($mhs,'nilai'));
$nilai_max = max(array_column($mhs,'nilai'));
$nilai_min = min(array_column($mhs,'nilai'));
$jlh_mhs = count($mhs);
$nilai_mean = number_format($jlh_nilai / $jlh_mhs,2);

$tfoot = [
    'Nilai Tertinggi'=> $nilai_max,
    'Nilai Terendah'=> $nilai_min,
    'Nilai Rata-Rata'=> $nilai_mean,
    'Jumlah Mahasiswa'=> $jlh_mhs,
    'Jumlah Keseluruhan Nilai'=> $jlh_nilai,
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        #footer{
            bottom:0;
            /* position: absolute; */
            width: 100%;
        }
    </style>
</head>
<header class="bg-light p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="m-0">MHY</h1>
            <!-- Foto profil -->
            <img src="https://github.com/mhyazid/tugas/blob/tugas6/src/foto_profile.jpg?raw=true" alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px;">
        </div>
    </header>
<h1 class='text-center mt-4 mb-4'>Daftar Nilai Mahasiswa</h1>
<body>
    <div class='row mx-auto '>
        <div class='col-md-7 mt-5 mx-auto'>
            <table class='table table-striped table-bordered table-hover'>
                <thead>
                    <tr class="table-dark">
                        <?php foreach($th_judul as $th){ ?>
                            <th><?= $th ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($mhs as $m){
                            $ket = ($m['nilai']>=65) ? "Lulus" : "Gagal";

                            $grade = '';
                            if($m['nilai']>=90 && $m['nilai']<=100){
                                $grade = 'A';
                            }elseif($m['nilai']>=76 && $m['nilai']<=89){
                                $grade = "B";
                            }elseif($m['nilai']>=60 && $m['nilai']<=75){
                                $grade = "C";
                            }elseif($m['nilai']>=40 && $m['nilai']<=59){
                                $grade = "D";
                            }elseif($m['nilai']>=0 && $m['nilai']<=39){
                                $grade = "E";
                            }else{
                                $grade = "Nilai invalid";
                            }

                            switch ($grade) {
                                case 'A':  
                                    $predikat = "Memuaskan";
                                    break;
                                
                                case 'B':  
                                    $predikat = "Bagus";
                                    break;
                                
                                case 'C':  
                                    $predikat = "Cukup";
                                    break;

                                case 'D':  
                                    $predikat = "Kurang";
                                    break;

                                case 'E':  
                                    $predikat = "Buruk";
                                    break;

                                default:
                                    $predikat = "-";
                                    break;
                            }
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $m['nama'] ?></td>
                            <td><?= $m['nim'] ?></td>
                            <td><?= $m['nilai'] ?></td>
                            <td><?= $ket ?></td>
                            <td><?= $grade ?></td>
                            <td><?= $predikat ?></td>
                        </tr>
                        <?php } ?>                  
                </tbody>
            </table>
        </div>
        <div class='col-md-3 mt-5 mx-auto'>
                <table class='table table-striped table-dark table-hover'>
                    <?php 
                    foreach($tfoot as $th=>$value) {
                    ?>
                    <tr>
                        <th><?= $th ?></th>
                        <th><?= $value ?></th>
                    </tr>
                    <?php } ?>
                </table>
                </div>
    </div>

    <footer id='footer' class="bg-dark text-light py-4 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Tugas 3 PHP: Muhammad Hadyan Yazid</p>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>