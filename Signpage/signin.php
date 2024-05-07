<?php

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$connection=mysqli_connect("localhost", "root", "", "signuppage");
$insert="INSERT INTO data(username, email, password) Values ('$username', '$email', '$password')";
$run=mysqli_query($connection, $insert);
if($run==true){
    echo"Data Inserted Successfully";
}

