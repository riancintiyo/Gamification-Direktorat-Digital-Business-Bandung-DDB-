<?php 
$con = mysqli_connect("localhost","root","","DDB");

$user = $_POST["username"];
$pass = $_POST['password'];

// $sql = mysqli_query($con,"SELECT * FROM dataAdmin WHERE username='admin' AND pass='admin'");

if($user == "ddb" && $pass == "admin"){
        
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['status'] = "login";

        // header("../admin");
        echo "<script language='JavaScript'>
        document.location=('dashboard.php')</script>";
}else{
        echo "<script language='JavaScript'>alert('Akses Ditolak');
        document.location=('login.php')</script>";
}

 ?>