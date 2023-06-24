<html>

<head>
    <title>Contoh Request POST</title>
</head>

<body>
    <h1>Input dua bilangan</h1>

    <?php 
    $bilangan1 = $_POST["Bilangan1"]; 
    $bilangan2 = $_POST["Bilangan2"]; 
    $jumlah = $bilangan1 + $bilangan2; 
     
    echo "<p>Hasil penjumlahannya adalah $jumlah </p>"; 
    ?>

</body>

</html>