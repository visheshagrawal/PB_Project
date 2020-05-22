<html>    
    <div class="topnav">
      <div class="topnav-right">
        <a target="_blank" href="test.html">Covid-Updates</a>
      </div>
    </div>

    <head>    
        <title>SignIn</title>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" /> 
    </head>    
    <body>  
        
        <h2>Login</h2>    
        <form name = "form2" action="insert_login.php" method = "get" enctype = "multipart/form-data" > 
        <form>
        <div class = "container">
            <div class = "container">    
                <div class = "form_group">    
                    <label>Email:</label>    
                    <input type = "email" name = "email" value = "" required/>    
                </div>         
                <div class = "form_group">    
                    <label>Password:</label>    
                    <input type = "password" name = "pwd" value = "" required/>    
                </div>  
                <!-- <div class = "form_group">    
                    <label>Submit:</label>  
                    <input type = "submit" name = "submit" value = "" required/>    
                </div> -->
                <div class = "form_group">    
                    <!-- <label>Submit:</label>   -->
                    <input type = "submit" name = "submit" value = "SUBMIT" required/>    
                </div>
            </div>    
        </form>    
    </body>   
    <?php 
    if( isset($_GET['message'])) {
        echo "Wrong password, please enter again";
    }
    
    ?> 
</html>    
