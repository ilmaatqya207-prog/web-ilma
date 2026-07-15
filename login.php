<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username != "" && $password != ""){

    $_SESSION['username'] = $username;

    echo "
    <script>
    alert('Login Berhasil');
    window.location='logout.php';
    </script>";

}else{

    echo "
    <script>
    alert('Username atau Password kosong');
    window.location='index.php';
    </script>";

}

?>