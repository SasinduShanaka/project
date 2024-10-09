<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "iwt_proj");

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    //checking the credentials
    $sql = "SELECT * FROM admin WHERE username= '{$username}' AND password = '{$pwd}' LIMIT 1";

    $result = mysqli_query($conn,$sql);

$_SESSION['username'] = $username ; 



    //if credentials are there then saving them to a session to use in further in the site
    if(mysqli_num_rows($result) > 0){
        
    

        header('location:admin_landing.php');
    } 

        
    //if credentials diddnt match then redirecting to the login site with error masege
    else{
        echo "<script>alert('invalid username or password')</script>";
        
       header('location:admin_login.php?error=invalid-username-or-password');
    }
}
else{
    header('location:admin_login.php');

}