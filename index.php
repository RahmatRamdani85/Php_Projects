<?php 
   $username = $password =  "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>


<?php
    include('hasil.php');
    
?>
    <h1>Form Registrasi</h1>
    <form method='post' action='' >

        <label>Username</label>
        <input type="text" name="user" value="<?php echo $username ?>" required><br>

        <label>Password</label>
        <input type="password" name="pass" value="<?php echo $password ?>" required><br>
        <input type="file" >
        <button type="submit" name="OK">OK</button>
    </form>
<!-- 
    <h1>Operasi Matematika</h1>
    <form method="post" action="rumus.php">
        <label>Bilangan 1</label>
        <input type="number" name="Bilangan1"><br>

        <label>Bilangan 2</label>
        <input type="number" name="Bilangan2"><br>

        <input type="submit" value="submit">
    </form> -->
    <br>
<?php

?>

</body>

</html>