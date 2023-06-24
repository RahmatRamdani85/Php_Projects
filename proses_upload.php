<?php
if(isset($_POST['submit'])) {
$FolderGambar = 'img-product/';
$FolderNama = 'nama-product/';
$FolderHarga = 'harga-product/';

$fileNama = $FolderNama . str_replace(' ', '_', $_POST['namaProduct']) . ".txt";
$fileHarga = $FolderHarga . 'harga' . str_replace(' ', '_', $_POST['namaProduct']) . ".txt";

  $openFileNama = fopen($fileNama, 'w') or die("File tidak bisa dibuka!");
  $openFileHarga = fopen($fileHarga, 'w') or die("File tidak bisa dibuka!");

  fputs($openFileNama, $_POST['namaProduct']);
  fputs($openFileHarga, $_POST['hargaProduct']);

  fclose(($openFileNama));
  fclose(($openFileHarga));

$uploadImg = $FolderGambar . $_FILES['gambar']['name'];
  if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadImg)) {
    echo '<script>window.location = "form_upload.php";</script>';
  } else {
    echo '<script>alert("Gagal menambahkan product!");</script>';
  }
};

?>