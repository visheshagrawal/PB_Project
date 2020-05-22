<html>    
    <div class="topnav">
      <div class="topnav-right">
        <a target="_blank" href="test.html">Covid-Updates</a>
      </div>
    </div>

    <head>    
        <title>Registration Form</title>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" /> 
    </head>    
    <body>  
         
        <h2>Sign Up</h2>    
        <form name = "form1" action="insert_signup.php" method = "get" enctype = "multipart/form-data" > 
        <form>
        <div class = "container">
            <div class = "container">    
                <div class = "form_group">    
                    <label>Name:</label>    
                    <input type = "text" name = "name" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Age:</label>    
                    <input type = "number" name = "age" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Email id:</label>    
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
</html>    
