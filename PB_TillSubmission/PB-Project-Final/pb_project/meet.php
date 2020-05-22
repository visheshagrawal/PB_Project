
<!DOCTYPE HTML>

<html>

  <head>
    <title>Google Meet Chatroom</title>

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
                  <span class="title">Chatroom</span>
                </a>

            </div>
          </header>


            <div id="wrapper">
                    <div><span style="color:black">
                    <div id="jokeDisplay">
                    </div>
                    <script>
                    var jokes= ['Once they come out with a corona virus vaccine I dont want to see any of you antivaxxers getting one. Dont be a hypocrite !  -----------------------------------------------------',
                    'Prediction: There will bw a minor baby boom in 9 months, and then one day in 2033, we shall witness the rise of the QUARNTEENS.---------------------------------------------------------',
                    'Every disaster movie starts with the government ignoring a scientist.---------------------------------------------------------', 
                    'If you need 144 rolls of toilet paper for 14 day quarntine you probablyy should"ve been seeing a doctorlong before Covid-19.---------------------------------------------------------', 
                    'Korea is the 3rd biggest hit country from COVID-19 and they still have toilet paper. The moral of the story is people are idiots:)---------------------------------------------------------',
                    'My 20th birthday is today but i want everyone to know that i will be postponing it definitely due to coronavirus and i will be turning 20 at a later date.Thank you!---------------------------------------------------------',
                    'At the end of the Lockdown i will either be a Great cook or an Alcoholic.---------------------------------------------------------',
                    'Its an isolationship---------------------------------------------------------',
                    'I hope Share market gets stable today . Share Market: Abhi to aur girega :)---------------------------------------------------------',
                    '2020 is a God punishing humanity for making the Cats Movie---------------------------------------------------------',
                    'New monthly budget : Gas-$0  Entertainment-$0  Clothes $0 Groveries $1624---------------------------------------------------------',
                    ]

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
                <h1>Are you as Bored as i am?</h1>
                <p>Join Google meet channels as per your intrest </p>
              </header>

              <hr>
              <section id="intro" class="main">
                <div class="spotlight">
                  <div class="content">



                  <div class="spotlight">
                    <div class="content">
                     
                      <h6><b>Join below channels to make your leisure time productive</b></h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://meet.google.com/wrf-fkdn-xya" class="button">Gossip with Strangers</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://meet.google.com/mkc-ymkt-vgk" class="button">Fitness Enthusiast</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://meet.google.com/mwh-tqxz-gev" class="button">Tech enthusiast</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://meet.google.com/kro-gdmn-ojj" class="button">Therapy or Counselling </a></li>
                      </ul>

                       <ul class="actions">
                        <li><a target="_blank" href="https://meet.google.com/bko-yyxx-yqd" class="button">Coders</a></li>
                      </ul>

                    </div>
                  </div>

                <hr>

                <hr>

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
              </ul>
            </div>
          </footer>



      </div>
  </body>
</html>
