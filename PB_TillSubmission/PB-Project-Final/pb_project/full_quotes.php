<!DOCTYPE HTML>
<html>
<head>
	<title>Quotes</title>
	<link rel="stylesheet" type="text/css" href="PB-ProjectStyle.css">
</head>
<body>
<style>
  body{
   background-image: url("quotes.jpeg");
   color: white;
   font-family: "Comic Sans MS", "Comic Sans", cursive;
  }
  .button{
    color: white;
  }
</style>
<H1><center><i>Quotes and Stories from Other Fellow Users</i></center></H1>
<div class="spotlight">
                      
              <div class = "container">
                <div class = "container">   
<i>
<?php

$link = mysqli_connect("localhost", "root", "", "stay_at_home");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
//Taking the message along with the user and inserting it
//$sqinsert = "INSERT INTO chatroom (chat) VALUES ('$quote')";
//$sqselect="SELECT msg,user FROM chatroom ORDER BY m_id DESC LIMIT 50";

$sqselect="SELECT quote FROM quotes";


// if($result=mysqli_query($link, $sqinsert)){
    
//     //echo "Welcome";
//     }
// else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }


if($result=mysqli_query($link, $sqselect)){
    while ($row = mysqli_fetch_assoc($result))
 {
    echo '"'.$row['quote'].'"';
    echo "<br><br>";
 }
}
    
    
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }


// header("Location:pb123.php");
// exit();
?>
  

                </div>

              </div>
              
<hr>
<!-- 
<br><br><br><br><br><br>
<a target="_blank" href="pb123.php" class="button">Back to home page</a> -->


</body>
</html>