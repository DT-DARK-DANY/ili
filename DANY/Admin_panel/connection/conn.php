<?php
$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="illusionaire";
$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
if(isset($_POST['submit'])){
    $Usernamelog=$_POST['Username'];
    $Passwordlog=$_POST['Password']; 
    $sql ="SELECT * FROM `admin_panel` WHERE `username` ='$Usernamelog' AND `password`='$Passwordlog';";
    $result =mysqli_query($conn,$sql);
    if(!empty(mysqli_fetch_array($result))){
        session_start();
        $_SESSION['Username']="";
        $_SESSION['Password']="";
        $name="";
        $password="";
        while($row=mysqli_fetch_array($result)){
            $name=$row['username'];
            $password=$row['password'];
        }
        $_SESSION['Username']=$Usernamelog;
        $_SESSION['Password']=$Passwordlog;
        echo "<script> alert('Welcome as admin MR/MRS $Usernamelog'); window.location.href='../Dashboard/index.php';</script>";
        }else{
            session_start();
        $_SESSION['Username']="";
        $_SESSION['Password']="";
            echo "<script> alert('Invalid admin'); window.location.href='http://localhost:3000/';</script>";
        }

    }

