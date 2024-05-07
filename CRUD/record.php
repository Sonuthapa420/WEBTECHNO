<?php
$roll=$_POST ["id"];
$name=$_POST ["name"];
$address=$_POST ["address"];

$conn=mysqli_connect("localhost","root","","collegestudents");
$inser="INSERT INTO student(id,name,address) VALUES('$roll','$name','$address')";
$run=mysqli_query($conn,$inser);
if($run==true){
    echo "Data insert successfully";
}
?>