<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$jumlah = $_GET['jumlah']; 
$barangpesanan = $_GET['barangpesanan']; 
echo "Anda memesan ". $jumlah . " " . $barangpesanan . ".<br>"; 
echo "Terima kasih atas kesediaan Anda memesan barang dari kami!"; 
?>
<h2>Toko Alat Tulis</h2> 
<form action="" method="get"> 
<select name="barangpesanan"> 
<option>Pensil</option> 
<option>Buku Tulis</option> 
<option>Ballpoint</option> 
</select> 

Jumlah pesanan: <input name="jumlah" type="text"> 
<input type="submit" value="Submit"> 
</form> 

</body>
</html>