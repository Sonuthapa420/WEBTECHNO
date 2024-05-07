<?php
$conn=mysqli_connect("localhost","root","","collegestudents");
error_reporting(0);
$_GET['rn'];
$_GET['sn'];
$_GET['gn'];

if($_POST['submit']){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $address=$_POST["address"];

    $query= "UPDATE student SET name='$name' , address='$address' WHERE id='$id'  ";
    $data = mysqli_query($conn,$query);

    echo "button was clicked!";
    if($data){
        echo "record update successfully <a href='student.php'> Click here to check update </a>";
    }
    else{
        echo "record update unsuccessfully";
    }
}

?>

<html>
    <head>
        <title>CRUD OPERATION</title>
    </head>

    <body>
    <form action='stuupdate.php' method="post">
            ID:- <input type="text" name="id" value="<?php echo $_GET['rn']; ?>"><br>
            Name:- <input type="text" name="name" value="<?php echo $_GET['sn']; ?>"><br>
            Address:- <input type="text" name="address" value="<?php echo $_GET['gn']; ?>"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>