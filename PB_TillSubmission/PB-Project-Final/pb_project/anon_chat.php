<!DOCTYPE HTML>

<html>

	<head>
		<title>ChatRoom</title>

		<style type="text/css">
            @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,700,900");
            body {
            background-image: url("anon.jpeg");   
            background-repeat: no-repeat;
            background-size: 120% 200%;
            font-size: 20px;  
            font-family: "Source Sans Pro", Helvetica, sans-serif; 
            color: white;
            }      
        </style>
		
    </head>
    
<body>

<H1><centre>Chatroom</centre></H1>

<div class = "container">
                <div class = "container">
<hr>
<br>
<?php

$aname=$_GET["aname"];

//echo $aname;
//echo "<br><br>";

$link = mysqli_connect("localhost", "root", "", "stay_at_home");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
//Taking the message along with the user and inserting it
//$sqinsert = "INSERT INTO chatroom (chat) VALUES ('$quote')";
//$sqselect="SELECT msg,user FROM chatroom ORDER BY m_id DESC LIMIT 50";

$sqselect="SELECT msg,user from (SELECT * from chatroom order by m_id desc limit 50) abc order by abc.m_id";


// if($result=mysqli_query($link, $sqinsert)){
    
//     //echo "Welcome";
//     }
// else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }



if($result=mysqli_query($link, $sqselect)){
    while ($row = mysqli_fetch_assoc($result))
 {
    echo $row['user']." : ".$row['msg'];
    echo "<br><br>";
 }
}
    
    
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }


// header("Location:pb123.php");
// exit();
?>

</div></div>

<hr>

<form action="insert_message.php" method="get">
                    <textarea name="message" placeholder="<?php echo htmlspecialchars($aname); ?> what's on your mind?" id="message" cols="100" rows="4"></textarea>
                    <br>
                    <input type="hidden" value="<?php echo htmlspecialchars($aname); ?>" name="aname" />
                    <br>
                    <input type="submit" value="Enter">  
                    </form>

</body></html>
