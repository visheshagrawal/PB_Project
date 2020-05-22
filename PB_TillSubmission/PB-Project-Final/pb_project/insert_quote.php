
<?php

$quote=$_GET["quote"];

//echo $quote;

$link = mysqli_connect("localhost", "root", "", "stay_at_home");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
//$sql = "INSERT INTO users (uname, email_id, upassword,age) VALUES ('$name','$email','$pwd','$age')";

// /$sql = "SELECT * FROM quotes WHERE email_id='$email' ";

//$sql="SELECT * FROM quotes desc limit 5";


$sqinsert = "INSERT INTO quotes (quote) VALUES ('$quote')";
$sqselect = "SELECT quote FROM quotes";

if($result=mysqli_query($link, $sqinsert)){
    
    //echo "Welcome";
    }
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



if($result=mysqli_query($link, $sqselect)){
    while ($row = mysqli_fetch_assoc($result))
 {
    echo $row['quote'];
    echo "<br><br>";
 }
}
    
    
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }


header("Location:PB-Project.php");
exit();
?>

