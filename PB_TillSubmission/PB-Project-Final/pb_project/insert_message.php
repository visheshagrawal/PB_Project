
<?php

$aname=$_GET["aname"];
$message=$_GET["message"];

echo $aname;
echo $message;

$link = mysqli_connect("localhost", "root", "", "stay_at_home");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
//$sql = "INSERT INTO users (uname, email_id, upassword,age) VALUES ('$name','$email','$pwd','$age')";

// /$sql = "SELECT * FROM quotes WHERE email_id='$email' ";

//$sql="SELECT * FROM quotes desc limit 5";


$sqinsert = "INSERT INTO chatroom (msg,user) VALUES ('$message','$aname')";


if($result=mysqli_query($link, $sqinsert)){
    
    echo "Welcome";
    }
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
    
    



header("Location:anon_chat.php?aname=$aname");
exit();
?>

