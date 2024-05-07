<?php
$conn=mysqli_connect("localhost","root","","collegestudents");
$id=$_GET['rn'];
$query="DELETE FROM student WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo "Record delete successfully <a href='student.php'>Click her to check the deleted record</a>";
}
else
{
	echo "Unable to delete records";
}

?>