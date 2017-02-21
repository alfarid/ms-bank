<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$pass = $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM bank WHERE username='$username' AND password='$pass'");
    if(mysql_num_rows($cek)==1){
        $c = mysql_fetch_array($cek);
        $_SESSION['username'] = $c['username'];
        $_SESSION['level'] = $c['level'];
        if($c['level']=="admin"){
        echo '<script> alert("Welcome "); </script>
                <script> window.location = "home1.php" </script>';
        }
        elseif($c['level']=="user"){
         echo   '<script> alert("Welcome"); </script>
                <script> window.location = "home2.php" </script>';
        }
    }else{
         die('<script>   alert("Username atau Password salah"); </script>
        <script>window.history.back()</script>');
    }
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location:index.php");
}
?>