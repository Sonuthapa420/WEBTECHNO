<?php
$conn=mysqli_connect("localhost", "root" ,"" ,"collegestudents");
$query="SELECT * FROM student";  //SELECT username, password FROM student 
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0){ // $username=$_post['username'];
    ?>
    <table border="1">
    <tr>
        <th>Roll</th>
        <th>Name</th>
        <th>Address</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
<?php
while($result=mysqli_fetch_assoc($data)){
    echo "
    <tr>
    <td>".$result['id']."</td>
    <td>".$result['name']."</td>
    <td>".$result['address']."</td>
    <td><a href='stuupdate.php?rn=$result[id],&sn=$result[name],&gn=$result[address]'>Edit</a></td>
    <td><a href='deleterecord.php?rn=$result[id]'>Delete</a></td>
</tr>    ";

// if($result['username']==$_post['username'] && $result['password']==$_post['password']){
//     echo"logged in successful";
// }

}
}
else{
    echo "No record found";
}
?>
</table>