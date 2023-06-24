<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container ms-3 mt-5">
    <h2>Add Product</h2>
    <div class="d-lg-flex gap-3">
    <form class="col" method="post" action="proses_upload.php" enctype="multipart/form-data">
        <label>Nama</label><br>
        <input type="text" name="namaProduct"><br>
        <label>Harga</label><br>
        <input type="number" name="hargaProduct"><br><br>
        <input type="file" name="gambar"><br><br>
        <button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
    </form>
        <br><br>
    <?php
          $dir_gambar = './img-product/';
          $dir_nama = './nama-product/';
          $dir_harga = './harga-product/';
          $file_gambar = array_slice(scandir($dir_gambar),2);
          $file_nama = array_slice(scandir($dir_nama), 2);
          $file_harga = array_slice(scandir($dir_harga), 2);
         
          if (count($file_gambar) > 0) {
            for ($i = 0; $i < count($file_gambar); $i++) {
          ?>
              <div class="col"  style="width: 16rem;">
                  <img src="img-product/<?php echo $file_gambar[$i]; ?>" class="card-img-top" style="width: 75%;" alt="Gambar product" >
                  <div class="card-body" style="padding: 5px;">
                  <h6>
                      <?php
                      $data_nama = fopen('nama-product/' . $file_nama[$i], "r") or die("Tidak dapat memuat nama product!");
                      echo fgets($data_nama);
                      fclose($data_nama);
                      ?>
                    </h6>
                    <p>
                    <?php
                      $data_harga = fopen('harga-product/'. $file_harga[$i], "r") or die("Tidak dapat memuat harga product!");
                      $formatHarga = intval(fgets($data_harga));
                      echo 'Rp. ' . number_format($formatHarga);
                      fclose($data_harga);
                      ?>
                    </p>
                  </div>
              </div>
            <?php
            }
          } else { ?>
            <p>Tidak ada product</p>
          <?php } ?>

        </div>
      </div>

</div>
</body>
</html>