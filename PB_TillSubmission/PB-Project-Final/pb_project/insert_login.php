<?php

$email=$_GET['email'];
$pwd=$_GET['pwd'];

echo $email;
echo $pwd;

$link = mysqli_connect("localhost", "root", "", "stay_at_home");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
//$sql = "INSERT INTO users (uname, email_id, upassword,age) VALUES ('$name','$email','$pwd','$age')";

$sql = "SELECT * FROM users WHERE email_id='$email' ";

if($result=mysqli_query($link, $sql)){
    $row = mysqli_fetch_array($result);
    if($row['upassword']==$pwd){
        echo "Welcome";
        header("Location:PB-Project.php");
        //send him to the main page using header function
    }
    else{
        $message= "Wrong password, enter again";
        header("Location:login.php?message=$message");
        exit();
    }
        // header("Location:vishDecbyExp.php");
        // exit();
    }
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}






?>