
<!DOCTYPE HTML>

<html>

	<head>
		<title>QuarantineBuddy</title>

		<link rel="stylesheet" type="text/css" href="PB-ProjectStyle.css">
		
	</head>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a class="logo">
									<span class="title">Hello There!</span>
								</a>

						</div>
					</header>


            <div id="wrapper">
                    <div><span style="color:black">
                    <div id="jokeDisplay">
                    </div>
                    <script>
                    var jokes= ['How many programmers does it take to change a light bulb? Zero its a hardware problem---------------------------------------------------------',
                    'There are only 10 kinds of people in this world: those who know binary and those who don’t.---------------------------------------------------------',
                    'Real programmers count from 0.---------------------------------------------------------', 
                    'Why did the programmer quit his job? Because he didnt get arrays.---------------------------------------------------------', 
                    'A foo walks into a bar, takes a look around and says Hello World---------------------------------------------------------',
                    '0 is false 1 is true right? 1---------------------------------------------------------',
                    'Things arent always #000000 and #FFFFFF.---------------------------------------------------------',
                    'What is the most used language in programming? Profanity---------------------------------------------------------',
                    '!False its funny because its True---------------------------------------------------------',
                    '2b||!2b---------------------------------------------------------',
                    'Yesterday I changed the name on my wifi to Hack-if-you-can. Today I found it named Challenge-Accepted---------------------------------------------------------',
                    'A programmer is a person who fixes a problem that you didnt know you had in a way you dont understand---------------------------------------------------------',
                    'How can you tell if a computer geek is an extrovert? They stare at your shoes when you talk instead of their own.---------------------------------------------------------',
                    'I would love to change the world but they wont give me the source code.---------------------------------------------------------',
                    'If at first you dont succeed call it version 1.0---------------------------------------------------------',
                    "I farted in the Apple store and everyone got mad at me. Not my fault they don't have Windows.---------------------------------------------------------",
                    'Knock Knock... Whos there? Art... Art Who? R2D2---------------------------------------------------------']


                    var randomNumber=Math.floor(Math.random()*(jokes.length));

                    var i;
                    text = ""
                    for (i = 0; i <jokes.length ; i++) {
                      text += jokes[i];
                    }
                    document.getElementById('jokeDisplay').innerHTML="<marquee><b>"+text+"</b></marquee>";
                        

                    </script>

</div>



				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>How are you feeling today?</h1>
								<p>Maybe we can help life those spirits up :)</p>
							</header>

              <hr>
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">


										<!-- EMOTIONS -->

                  <div class="spotlight">
                    <div class="content">
                      <h2>Happy</h2>
                      <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>

                <!-- <div class="spotlight">
                  <div class="content">
                    <h2>Okay</h2>
                      <p>You can surely do better with a little help</p>

                      <h6><b>Symptoms: </b>HJVDKWVCWVYWVDV</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>
                <hr> -->
                <!-- EMOTIONS -->





                <div class="spotlight">
                  <div class="content">
                    <h5>Any advice/personal experience you'd like to share?</h5>
                      <p>Please enter in the box below. Including your name isn't mandatory.</p>
                      
              <div class = "container">
                <div class = "container">    
                  <div class = "form_group"> 
                  <form action="action_page.php" method="get">
                    <textarea name="quote" placeholder="Remember, be nice!" id="quote" cols="70" rows="4"></textarea>
                    <br>
                    <input type="submit" value="Submit">  
                    </form> 
                </div>

              </div></div>
                
                <hr>
              <div class = "container">
                <div class = "container">
                <h5>Quotes by Others</h5>
                <?php 
                $link = mysqli_connect("localhost", "root", "", "stay_at_home");
 
                // Check connection
                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                // $sqselect = "SELECT quote FROM quotes";

                // $sqselect= "SELECT quote FROM quotes ORDER BY S.no DESC";

                // $sqselect= "SELECT TOP 5* FROM quotes ORDER BY S.no DESC";

                $sqselect="SELECT quote FROM quotes ORDER BY q_id DESC LIMIT 3";
                
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
                
                
                ?>
                </div></div>



                    </div>
                  </div>
                <hr>

                <a target="_blank" href="full_quotes.php" class="button">Show more quotes</a>

							</section>
							
						</div>
					</div>
				


					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>Made by </li>
                <li>Juhi Pandey,</li> 
                <li>Vishesh Agrawal,</li> 
                <li>Ankit Rana, </li>
                <li>Parth Garg</li>
                <li>Sarthak Pal</li>
							</ul>
						</div>
					</footer>



			</div>
	</body>
</html>
