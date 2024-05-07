<?php

$username1=$_POST['username1'];
// $email=$_POST['email'];
$password1=$_POST['password1'];
$connection=mysqli_connect("localhost", "root", "", "signuppage");
// $select="SELECT username,password FROM data";
$select="SELECT * FROM data where username='$username1' AND password='$password1'";
$data=mysqli_query($connection, $select);

if(mysqli_num_rows($data)!=0){

echo"logged in ";
} else{
    echo "unsuc";
}

// $check="unsucc";
// while($result=mysqli_fetch_assoc($data)){
//     if($result['username']==$username1 ){
//         echo "logged in successfully";
//         $check="succ";
//         
//     } 
// }
// if($check== "unsucc"){
//     echo"unsuc";
// }


//TO PRINT THE DATA
// echo"<pre>";
//     print_r($result);
//     echo "</pre>";
// echo"hi".$result["username"]."".$result["password"];
// echo $result['username'];
// echo"<br>";
// echo $username1;









?>