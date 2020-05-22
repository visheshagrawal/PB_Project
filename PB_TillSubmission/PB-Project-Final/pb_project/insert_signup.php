<?php

$age=$_GET['age'];
$name=$_GET['name'];
$email=$_GET['email'];
$pwd=$_GET['pwd'];

echo $age;
echo $name;
echo $email;
echo $pwd;

$link = mysqli_connect("localhost", "root", "", "stay_at_home");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sq2 = "SELECT * FROM users WHERE email_id='$email' ";
$checkemailid = mysqli_query($link, $sq2);

if (mysqli_num_rows($checkemailid) > 0) {
    $message= "User already exists";
    header("Location:signup.php?message=$message"); // Link him to the first page where he has option of both
}
else{

    $sql = "INSERT INTO users (uname, email_id, upassword,age) VALUES ('$name','$email','$pwd','$age')";
    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
        //Write to run the script to send email
        $hello=shell_exec("python Send_email.py $email $name");
        //echo $hello;
        header("Location:login.php");
    } else{
        //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        header("Location:login.php");
    }

}








?>
