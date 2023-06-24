<?php
 
    $username = $_POST["user"];
    $password = $_POST["pass"];


    
if (isset($_POST['OK'])) {

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ((($username == "ichwan") && ($password == "admin")) || 
     (($username == "mirza") && ($password == "superadmin"))) 
    { 
     echo "Login sukses"; 
     echo '<br>';
    echo 'namamu adalah '.$username;
    echo '<br>';
    echo 'passwordmu adalah '. $password;
    echo '<br>';
    } 
    else 
    { 
     echo "Login gagal"; 
     echo '<a href="./home.html">';
    } 
}

    // print $_REQUEST["user"];
    // echo '<br>';
    // print $_REQUEST["pass"];
   

  
    if ($username == 'ichwan') {
        echo 'Welcome';
    } else {
        echo 'Anda harus daftar dulu';
    };

?>
    