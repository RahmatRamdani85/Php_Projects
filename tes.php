<?php 
// $a = 10; 
// $a = 9; 
// echo "Nilai variabel \$a adalah : " . $a.'<br>'; 

// $a = 10; 
// if (is_string($a)) echo "\$a bertipe string<br>"; 
// else echo "\$a bukan string<br>"; 
// $a = "Pemrograman PHP is OK"; 

// if (is_string($a)) echo "\$a bertipe string<br>"; 
// else echo "\$a bukan string<br>";


// $a = 3 + 4 * 5 - 6; 
// echo $a; 
// echo '<br>';
// $a = (3 + 4) * 5 - 6; 
// echo $a;

// $panjang = 10; 
// $lebar = 15; 
// $luas = $panjang * $lebar; 
// echo "Luas persegi panjang = " . $luas . " satuan luas";

// $myfile = fopen("Tes.txt", "r") or die("File gagal dibuka !");
// echo fread($myfile, filesize('Tes.txt'));
// fclose($myfile);

// $myfile = fopen("Tes.txt", "a+") or die("File gagal dibuka !");
// $txt = "Rahmat\n";
// fwrite($myfile, $txt);
// $txt = "Sutisna\n";
// fwrite($myfile, $txt);
// $file = fopen("Tes.txt", "r") or die("File gagal dibuka !");
// echo fread($file, filesize('Tes.txt'));
// fclose($myfile);


// $file = "Tes.txt";
// $filebaru = "Tes2.txt";
// $filebaru2 = "Tes3.txt";
// if (copy ($file, $filebaru)) {
//    echo "File <b>$file</b> berhasil dicopy menjadi <b>$filebaru</b>.<br/>";
// }
//   if (rename ($filebaru, $filebaru2)) {
//      echo "File <b>$filebaru</b> berhasil direname menjadi <b>$filebaru2</b>.<br/>";
//   }
//   if (unlink($filebaru2)) {
//      echo "File <b>$filebaru2</b> berhasil dihappus. <br/>";
//   }

   //  $dir = "Dataku"; //nama direktori
   //  $cek = mkdir($dir);
   //  if ($cek) {
   //     echo "Direktori <b>$dir</b> berhasil dibuat";
   //  } else {
   //     echo "Direktori <b>$dir</b> gagal dibuat";
   //  }
 

// $dir = dirname(__FILE__)."/img-product";
// if ($handle = opendir($dir)) {
//    while (false !== ($file = readdir($handle))) {
//        if ($file != "."&&$file !="..") {
//           echo "$file<br/>";
//        }
//    }
// closedir($handle);
// }


// $dir = "Dataku"; //nama folder
// $del = rmdir($dir);
// if ($del) {
//   echo "<br>Direktori <b>$dir</b> berhasil dihapus";
// } else {
//   echo "<br>Direktori <b>$dir</b> gagal dihapus";
// }



//=====================

// $FolderNamaProduct = 'nama-product';
// $FolderFotoProduct = 'img-product';
// $FolderHargaProduct = 'harga-product';

// $myfile = fopen("nama-product/Tablet.txt", "r");
// $File = 'Tablet.txt';
// echo 'File '.$File.' berhasil ditambahkan ke folder '.$FolderNamaProduct.'<br>';
// $OpenFile = fopen("nama-product/Tablet.txt", "a+") or die("File tidak dapat dibuka!");
// $DataFile = "Advan\n";
// fwrite ($OpenFile, $DataFile );
// echo 'Data berhasil ditambahkan <br>';
// echo fread($myfile, filesize("nama-product/Tablet.txt")).'<br>';
// fclose($myfile);


// $dir = "img-product";
// $check = mkdir($dir);
// if ($check) {
//    echo 'Folder <b>'.$dir.'</b> berhasil dibuat';
// } else {
//    echo 'Folder <b>'.$dir.'</b> gagal dibuat';
// }


// $file = "Tes.txt";
//    if (file_exists($file)) {
//    echo "File $file ADA";
//    } else {
//    echo "File $file TIDAK ADA";
//    }
//    //
//    if (is_file($file)) {
//    echo "File <b>$file</b> adalah FILE<br/>";
//    //
//    if (is_executable($file)) {
//       echo "File <b>$file</b> bisa dijalankan secara langsung (executable)<br/>";
//    } else {
//       echo "File <b>$file</b> TIDAK executable<br/>";
//    }
//    //
//    if (is_writable($file)) {
//       echo "File <b>$file</b> bisa ditulis / diedit<br/>";
//    } else {
//       echo "File <b>$file</b> TIDAK bisa ditulis / diedit<br/>";
//    }
//    //
//    if (is_readable($file)) {
//       echo "File <b>$file</b> bisa dibaca<br/>";
//    } else {
//       echo "File <b>$file</b> TIDAK bisa dibaca<br/>";
//    }
// echo "Akses terakhir file <b>$file</b>=". date("d-m-Y H:i:s.", fileatime($file))."<br/>";
// echo "File <b>$file</b> dibuat = ". date("d-m-Y H:i:s.",filectime($file))."<br/>";
// echo "Modifikasi terakhir file <b>$file</b>=". date("d-m-Y H:i:s.", filemtime($file))."<br/>";
// echo "Ukuran file <b>$file</b> =". filesize($file)."bytes<br/>";
// echo "Jenis file <b>$file</b> = ". filetype($file)."<br/>";
// } else if (is_dir($file)) {
// echo "File <b>$file</b> adalah DIREKTORI<br/>";
// } else {
// echo "File <b>$file</b> tidak dikenal<br/>";
// }



?>


