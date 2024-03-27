<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .list-group-item{
            font-weight: bold;
        }
        .total-akhir{
            font-size:40px
        }
    </style>

</head>
<body>
<h1 class="text-center">Form Pembelian</h1>
<form method="POST">
<div class='col-md-7 mx-auto mt-5'>
<div class="form-group">
    <label for="nama_pelanggan">Nama Pelanggan</label> 
    <input id="nama_pelanggan" name="nama_pelanggan" placeholder="Nama Pelanggan" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="produk">Produk Pilihan</label> 
    <div>
      <select id="produk" name="produk" class="custom-select">
        <option value="">--Pilih Produk--</option>
        <option value="TV">TV</option>
        <option value="Kulkas">Kulkas</option>
        <option value="Mesin Cuci">Mesin Cuci</option>
        <option value="Ac">Ac</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah Beli</label> 
    <input id="jumlah" name="jumlah" placeholder="Jumlah" type='text' class="form-control">
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary" >Submit</button>
    <button name="reset" type="reset" class="btn btn-danger">Reset</button>
    <button class="btn btn-danger" onclick="hapusData()">Hapus</button>
</li>
  </div>
</div>
</form>
<script>
    function hapusData() {
        document.querySelector('.list-group').innerHTML = '';
    }
</script>
</body>
</html>


<?php
error_reporting(0);
// echo "<div class='text-center'>Teste</div>"
$nama_pel= $_POST['nama_pelanggan'];
$produk= $_POST['produk'];
$jlh= $_POST['jumlah'];

$harga='';
if($produk=="TV"){
    $harga = 1000000;
}elseif ($produk=="Kulkas") {
    $harga = 2000000;
}elseif ($produk=="Mesin Cuci") {
    $harga = 3000000;
}elseif ($produk=="Ac") {
    $harga = 4000000;
}

$total= $harga * $jlh;
$diskon= 0.2 * $total;
$ppn= 0.1 * ($total-$diskon);
$totalfin= ($total-$diskon) + $ppn;


$proses=$_POST['submit'];
if(isset($proses)){
    ?>
    <div class="mx-auto mt-5 col-md-4">
    <ul class='list-group'>
    <li class='list-group-item'>Nama Pelanggan:  <?= $nama_pel?></li>
    <li class='list-group-item'>Produk Pilihan:  <?= $produk?></li>
    <li class='list-group-item'>Jumlah Beli:  <?= $jlh?></li>
    <li class='list-group-item'>Harga Satuan:  Rp <?= $harga?></li>
    <li class='list-group-item'>Total:  Rp <?= $total?></li>
    <li class='list-group-item'>Diskon:  Rp <?= $diskon?></li>
    <li class='list-group-item'>PPN:  Rp <?= $ppn?></li>
    <li class='list-group-item total-akhir'>Total Akhir:  Rp <?= $totalfin?></li>
    </ul>


    </div>

<?php }?>
