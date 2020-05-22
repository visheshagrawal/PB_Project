
<!DOCTYPE HTML>

<html>

  <head>
    <title>QuarantineBuddy</title>

    <link rel="stylesheet" type="text/css" href="PB-ProjectStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
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

              <a href="#fun">Go straight to fun activities?</a>
              <hr>

              <header>
                <h1>How are you feeling today?</h1>
                <p>Maybe we can help life those spirits up :)</p>
              </header>

              <section id="intro" class="main">
                <div class="spotlight">
                  <div class="content">


                    <!--------- EMOTIONS ----------------->

                    <div class="spotlight">
                    <div class="content">



                      <div class="container">
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse1"><h2>Happy</h2></a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">


                                  <p>Glad to hear</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>A smile on your face</li>
                        <li>Spring in you step</li>
                        <li>Sparkly eyes</li>
                        <li>Content and satisfied</li>
                        <li>Glass half full mentality</li>
                        <li>Taking each day in a stride</li>
                      </ul>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.reddit.com/r/UpliftingNews/" class="button">Uplifting News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>

                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>



                <div class="spotlight">
                    <div class="content">


                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse2"><h2>Okay-ish</h2></a>
                                </h4>
                              </div>
                              <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">

                                  <p>You're doing fine, don't sweat it</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>Satisfied to a certain extent</li>
                        <li>Can't complain about how thing are going</li>
                        <li>Might not be having the best time, but it's not bad</li>
                      </ul>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.reddit.com/r/UpliftingNews/" class="button">Uplifting News</a></li>
                      </ul>

                      <!-- <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul> -->

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>


                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>                     
    



                <div class="spotlight">
                    <div class="content">
                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse3"><h2>Anxious</h2></a>
                                </h4>
                              </div>
                              <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <p>Yikes!</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>Stressed out</li>
                        <li>Panic, fear, and uneasiness</li>
                        <li>Not being able to stay calm and still</li>
                        <li>Cold, sweaty, numb or tingling hands or feet</li>
                        <li>Shortness of breath</li>
                        <li>Heart palpitations</li>
                        <li>Dry Mouth</li>
                        <li>Nausea</li>
                        <li>Tense Muscles</li>
                        <li>Dizziness</li>
                        <li>Excessive worrying</li>
                      </ul>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.bbc.com/news/health-52443108" class="button">This article might help</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://www.webmd.com/anxiety-panic/ss/slideshow-ways-to-stop-panic-attack" class="button">Ways to Stop a Panic Attack</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="http://understandinganxiety.wayahead.org.au/online-anxiety-and-mental-health-resources/" class="button">Online Anxiety and Mental Health Resources</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>                
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>


                      
                      


                <div class="spotlight">
                    <div class="content">


                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse4"><h2>Paranoid</h2></a>
                                </h4>
                              </div>
                              <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">

                                  <p>Oof!</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>Being defensive, hostile, and aggressive</li>
                        <li>Being easily offended</li>
                        <li>Believing you are always right and having trouble relaxing or letting your guard down</li>
                        <li>Not being able to compromise, forgive, or accept criticism</li>
                        <li>Not being able to trust or confide in other people</li>
                        <li>Reading hidden meanings into people’s normal behaviors</li>
                      </ul>
                      

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://www.reddit.com/r/UpliftingNews/" class="button">Uplifting News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://www.webmd.com/anxiety-panic/ss/slideshow-ways-to-stop-panic-attack" class="button">Ways to Stop a Panic Attack</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://www.webmd.com/mental-health/why-paranoid#4-6" class="button">Treatment</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>


                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>





                <div class="spotlight">
                    <div class="content">


                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse5"><h2>Depressed</h2></a>
                                </h4>
                              </div>
                              <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">

                                  <p>Uh-oh!</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>Trouble concentrating, remembering details, and making decisions</li>
                        <li>Fatigue</li>
                        <li>Feelings of guilt, worthlessness, and helplessness</li>
                        <li>Pessimism and hopelessness</li>
                        <li>Insomnia, early-morning wakefulness, or sleeping too much</li>
                        <li>Irritability</li>
                        <li>Restlessness</li>
                        <li>Loss of interest in things once pleasurable, including sex</li>
                        <li>Overeating, or appetite loss</li>
                        <li>Aches, pains, headaches, or cramps that won't go away</li>
                        <li>Digestive problems that don't get better, even with treatment</li>
                        <li>Persistent sad, anxious, or "empty" feelings</li>
                        <li>Suicidal thoughts or attempts</li>
                        <li>Changes in your menstrual cycle</li>
                      </ul>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.reddit.com/r/UpliftingNews/" class="button">Uplifting News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="chat.php" class="button">Try our online chat forum</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://www.puzzler.com/online-puzzles/" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>


                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>

 


                <div class="spotlight">
                    <div class="content">
                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse6"><h2>Insomniac</h2></a>
                                </h4>
                              </div>
                              <div id="collapse6" class="panel-collapse collapse">
                                <div class="panel-body">

                                  <p>Yeesh!</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>Difficulty falling asleep</li>
                        <li>Not feeling well rested after waking up</li>
                        <li>Waking up too early</li>
                        <li>Daytime sleepiness</li>
                        <li>Problems with memory and concentration</li>
                        <li>Ongoing worries about sleep</li>
                      </ul>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.webmd.com/sleep-disorders/understanding-insomnia-treatment" class="button">Treatment</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>


                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>



                <!-- <div class="spotlight">
                    <div class="content">


                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse7"><h2>Chronophobic</h2></a>
                                </h4>
                              </div>
                              <div id="collapse7" class="panel-collapse collapse">
                                <div class="panel-body">

                                  <p>Glad to hear</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://link to our website" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>


                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div> -->




                <div class="spotlight">
                    <div class="content">


                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse8"><h2>Cleithrophobic</h2></a>
                                </h4>
                              </div>
                              <div id="collapse8" class="panel-collapse collapse">
                                <div class="panel-body">

                                  <p>Oh no!</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>Dread</li>
                        <li>Speedy respiration</li>
                        <li>Irregular heartbeat</li>
                        <li>Inability to articulate words/sentences</li>
                        <li>Shaking</li>
                        <li>Need to escape</li>
                        <li>Lashing out</li>
                        <li>Freezing up</li>
                      </ul>
                      

                      <ul class="actions">
                        <li><a target="_blank" href="https://hasofferstracking.betterhelp.com/aff_c?offer_id=25&aff_id=1510&aff_sub3=n99d6ddb9e5e04d1e87e06d3f59f4238521" class="button">Counselling for teens</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://driveandlisten.herokuapp.com" class="button">Try this out!</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>


                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>



              <div class="spotlight">
                    <div class="content">


                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse9"><h2>Home-sick</h2></a>
                                </h4>
                              </div>
                              <div id="collapse9" class="panel-collapse collapse">
                                <div class="panel-body">

                                  <p>:(</p>
                      <h6><b>Symptoms: </b>TROLOLOL NO ONE IS HAPPY IN IIITD, CHOSE SOMETHING ELSE</h6>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.insider.com/online-games-activities-to-try-with-long-distance-friends-family-2020-3" class="button">Fun activities to do with the family</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://www.insider.com/online-games-apps-play-with-family-kids-multiplayer" class="button">Online games to play with your parents and/or siblings</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="chat.php" class="button">Try our online chat forum</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>


                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>                     
    



                <div class="spotlight">
                    <div class="content">
                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse10"><h2>Lonely</h2></a>
                                </h4>
                              </div>
                              <div id="collapse10" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <p>Darn it!</p>
                      <h6>Use this time to reconnect with family and friends but don't forget to spend some quality with yourself. Go on an exploration with yourself to find what you like </h6>

                      <ul class="actions">
                        <li><a target="_blank" href="chat.php" class="button">Try our online chat forum</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://www.miniclip.com/games/genre-2/multiplayer/en/" class="button">Multiplayer games online</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>

                    </div>
                  </div>                
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>


                      
                      


                <div class="spotlight">
                    <div class="content">


                      <div class="container">
                          
                          <div class="panel-group">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapse11"><h2>Frustrated</h2></a>
                                </h4>
                              </div>
                              <div id="collapse11" class="panel-collapse collapse">
                                <div class="panel-body">

                                  <p>Ugh!</p>
                      <h6><b>Symptoms: </b></h6>
                      <ul>
                        <li>Easily Annoyed</li>
                        <li>Want to engage in negative/destructive behaviours</li>
                      </ul>
                      <hr>
                      <h6><b>Things that contribute to frustration: </b></h6>
                      <ul>
                        <li>Stagnation at work, or loss of a job, losing a promotion</li>
                        <li>Emotional difficulties or loss, including bereavement, a diagnosable psychological condition, loss of a friend</li>
                        <li>Your state of health, and any physical or medical conditions</li>
                        <li>Financial situation, including bankruptcy, being overextended, wasteful spending</li>
                      </ul>
                      <hr>
                      <h6><b>Treatment: </b></h6>
                      <ul>
                        <li>Breathing exercises</li>
                        <li>Meditation practice</li>
                        <li>Yoga</li>
                        <li>Physical exercise</li>
                        <li>Relaxation activities</li>
                        <li>Taking up a hobby or pastime</li>
                        <li>Cognitive restructuring</li>
                        <li>Learning how to release emotion</li>
                        <li>Psychological counseling or therapy</li>
                      </ul>
                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.reddit.com/r/UpliftingNews/" class="button">Uplifting News</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="chat.php" class="button">Try our online chat forum</a></li>
                      </ul>


                      <ul class="actions">
                        <li><a target="_blank" href="https://www.puzzler.com/online-puzzles/" class="button">Puzzles</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a href="#help" class="button">Help someone else out</a></li>
                      </ul>
                    </div>
                  </div>


                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>

                      
    

                

               
                    </div>
                  </div>
                

              </section>
              
              <section id="fun">
                    <h3>Fun Stuff!</h3>
                    <ul class="actions">
                        <li><a target="_blank" href="chat.php" class="button">Global Chat Room</a></li>
                      </ul>

                      <ul class="actions">
                        <li><a target="_blank" href="https://discord.gg/J9JN6d" class="button">Socialize</a></li>
                      </ul>
                    
                    <ul class="actions">
                        <li><a href="#Games" class="button">Games</a></li>
                      </ul>
                    
                    <ul class="actions">
                        <li><a href="#Sports" class="button">Sports</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a target="_blank" href="https://kissasian.sh/ " class="button">Korean Dramas</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a target="_blank" href="https://frandom.herokuapp.com/books.html/" class="button">For book lovers</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a href="#Workout" class="button">Workout</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a href="#Movies" class="button">Movies</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a target="_blank" href="http://127.0.0.1:5000" class="button">Anonymous Personal Chat</a></li>
                      </ul>


                    <ul class="actions">
                        <li><a href="#Puzzles" class="button">Puzzles</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a href="#TV" class="button">TV Shows</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a target="_blank" href="https://www.yogastudioapp.com/" class="button">Yoga</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a href="#Music" class="button">Music</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a href="#Dance" class="button">Dance</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a href="#Chess" class="button">Chess</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a href="#Cooking" class="button">Cooking</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a target="_blank" href="https://techcrunch.com/" class="button">For all the tech geeks</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a target="_blank" href="https://www.ted.com/playlists/180/the_10_most_popular_tedx_talks" class="button">Most Popular Ted Talks</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a target="_blank" href="https://mangadex.org/" class="button">Manga</a></li>
                      </ul>

                    <ul class="actions">
                        <li><a href="#Stream" class="button">Streaming platforms</a></li>
                      </ul>
                  </section>
                  <hr>

          <section id="help">
                <div class="spotlight">
                  <div class="content">
                    <h5>Any advice/personal experience you'd like to share?</h5>
                      <p>Please enter in the box below. Including your name isn't mandatory.</p>
                      
              <div class = "container">
                <div class = "container">    
                  <div class = "form_group"> 
                  <form action="insert_quote.php" method="get">
                    <textarea name="quote" placeholder="Remember, be nice!" id="quote" cols="70" rows="4"></textarea>
                    <br>
                    <input type="submit" value="Submit">  
                    </form> 
                </div>

              </div></div>
                
                <hr>




             <!--  <div class = "container">
                <div class = "container"> -->
                  
                <h5>Recent Quotes and Stories by Fellow Users</h5>
                <?php 
                $link = mysqli_connect("localhost", "root", "", "stay_at_home");
 
                // Check connection
                if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                // $sqselect = "SELECT quote FROM quotes";

                // $sqselect= "SELECT quote FROM quotes ORDER BY S.no DESC";

                // $sqselect= "SELECT TOP 5* FROM quotes ORDER BY S.no DESC";

                $sqselect="SELECT quote FROM quotes ORDER BY q_id DESC LIMIT 5";
                
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

            

               <!--  </div></div> -->
                    </div>
                  </div>
                <hr>

                <a target="_blank" href="full_quotes.php" class="button">Show more quotes</a>

              </section>

              <hr>
            <div id="Entertainment"> 
              <section id="Games">
                <h2>Games</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="https://store.steampowered.com/" class="button">Steam</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.miniclip.com/games/en/" class="button">Miniclip</a></li>
                      </ul> 
                      <ul class="actions">
                        <li><a target="_blank" href="https://krunker.io/" class="button">Krunker</a></li>
                      </ul> 
                      <ul class="actions">
                        <li><a target="_blank" href="https://skribbl.io/" class="button">Multiplayer drawing game</a></li>
                      </ul>    
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.callofduty.com/warzone" class="button">COD: Warzone</a></li>
                      </ul>       
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.jenovachen.com/flowingames/flowing.htm" class="button">flOw</a></li>
                      </ul>    
                      <ul class="actions">
                        <li><a target="_blank" href="https://keeptalkinggame.com/" class="button">Keep Talking and Nobody Explodes</a></li>
                      </ul>    
              </section>

              <section id="Sports">
                <h2>Sports</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="https://espn.com" class="button">ESPN</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=pQ_UdQ6kczA&list=PLox1kfMm75BwPSxKkMEHwO5pJV9hk_RUM" class="button">Podcast</a></li>
                      </ul> 
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.fourfourtwo.com/" class="button">Football News</a></li>
                      </ul>   
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.tennis.com/" class="button">Tennis</a></li>
                      </ul>       
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.nba.com/news" class="button">NBA</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://bwfbadminton.com/news/" class="button">Badminton</a></li>
                      </ul>  
              </section>

              <section id="Puzzles">
                <h2>Puzzles</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="https://cryptograms.puzzlebaron.com/play.php" class="button">Cryptograms</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="http://dkmgames.com/Codewords/" class="button">Codewords</a></li>
                      </ul> 
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.puzzle-nonograms.com/" class="button">Nonograms</a></li>
                      </ul>    
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.komoroske.com/sudoku/" class="button">Sudoku</a></li>
                      </ul>    
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=98TQv5IAtY8" class="button">Green-eyed logic puzzle</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=ZKh6z0X6KRw" class="button">Virus puzzle</a></li>
                      </ul>                   
              </section>

              <section id="TV">
                <h2>TV Shows</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="https://frandom.herokuapp.com/shows.html/" class="button">General</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.vulture.com/article/mystery-box-shows-homecoming-westworld-lost.html" class="button">Mystery</a></li>
                      </ul> 
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.gamesradar.com/best-sitcoms-to-stream/" class="button">Sitcoms</a></li>
                      </ul>   
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.tvovermind.com/20-best-fantasy-tv-shows-time/" class="button">Fantasy</a></li>
                      </ul>                  
              </section>

              <section id="Movies">
                <h2>Movies</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="https://frandom.herokuapp.com/movies.html/" class="button">Catalog</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.rottentomatoes.com/top/" class="button">Top Movies rotten tomatoes</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.goodhousekeeping.com/life/entertainment/g3243/best-romantic-comedy-movies/" class="button">Rom-Coms</a></li>
                      </ul>                   
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.imdb.com/list/ls002861242/" class="button">Top Movies IMDB</a></li>
                      </ul>   
              </section>

              <section id="Stream">
                <h2>Streaming platforms</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="www.netflix.com/" class="button">Netflix</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.primevideo.com/" class="button">Amazon Prime Video</a></li>
                      </ul> 
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.hotstar.com/in" class="button">Disney + Hotstar</a></li>
                      </ul>   
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.voot.com" class="button">Voot</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.sonyliv.com" class="button">Sony Liv</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.hulu.com/" class="button">Hulu</a></li>
                      </ul>                       
              </section>

              <!-- <section id="Yoga">
                <h2>Yoga</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.yogastudioapp.com/" class="button">App</a></li>
                      </ul>
                       <ul class="actions">
                        <li><a target="_blank" href="https://www.miniclip.com/games/en/" class="button">Miniclip</a></li>
                      </ul>               
              </section> -->

              <section id="Music">
                <h2>Music</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=TlrHN5tlg2I&list=PLJnHjhfsRd1oLG3v3qqJ72yZEpTUKvfnp&index=1" class="button">Guitar</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=TlrHN5tlg2I&list=PLJnHjhfsRd1oLG3v3qqJ72yZEpTUKvfnp&index=1" class="button">Flute </a></li>
                      </ul> 
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=3j3LkHFJmJE&list=PL8dtOMjtlSMRJfkbzJJRWttKfQf5z7Nba&index=1" class="button">Keyboard</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=et9hU7QMDYU&list=PLrtlBUjcYAnCVWka4J5nbDbbaLT9nU-th&index=1" class="button">Drum</a></li>
                      </ul>    
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=iPbCdOsrDK4&list=PL6urkeK7KgD6z9rImgxwiqBYZVwq31zlg" class="button">Violin</a></li>
                      </ul>  
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=hXKUicqg0bU&list=PLbAzI1rqV3WK2c6M6mG3G3HXQy05q_KP_&index=2&t=0s
" class="button">Tabla</a></li>
                      </ul>             
              </section>

              <section id="Dance">
                <h2>Dance</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=hR9Gj2aLEQQ&list=PLgHhhzb9o1Rq2oGJngrsFpIOxMFUh2Wo9" class="button">Breakdance </a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=Ax3LF-EPvKU&list=PL_pFZy113yg2uF1tE5zr_c_FYvPvKebfS " class="button">Bhangra</a></li>
                      </ul> 
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=bmety40FIis&list=PLgHhhzb9o1Rp08dEeZv3AJXEVxT6tELQ7
                        " class="button">Hip hop</a></li>
                      </ul>  
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=STzzos2rxz0&list=PLgHhhzb9o1Ro58veHJvvMBKVeoNKoaqY6" class="button">Freestyle</a></li>
                      </ul>  
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=MDabYz9V0SI" class="button">Bharatanatyam </a></li>
                      </ul>  
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/channel/UCT0EeR8SMCItnnOgmLfEjoQ/featured" class="button">Kathak</a></li>
                      </ul>  
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=z6yAzVjoJpc&list=PLiGLFaoQ5mAFzxamEHNzIiRT0TGyGTi0n" class="button">Bollywood</a></li>
                      </ul>                 
              </section>

              <section id="Chess">
                <h2>Chess</h2>
                    <h3>To Play</h3>
                      <ul class="actions">
                        <li><a target="_blank" href="https://lichess.org" class="button">lichess</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="www.chess.com" class="button">chess.com</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://chess24.com/en/play/chess" class="button">chess24</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.chessclub.com" class="button">chess club</a></li>
                      </ul>
                    <h3>To Learn</h3>
                      <ul class="actions">
                        <li><a target="_blank" href="https://chessmood.com" class="button">ChessMood</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://blog.feedspot.com/chess_youtube_channels/" class="button">Videos</a></li>
                      </ul>    
                    <h3>Chess News sites</h3>
                      <ul class="actions">
                        <li><a target="_blank" href="https://en.chessbase.com" class="button">ChessBase</a></li>
                      </ul>
                    <h3>Books</h3>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.ichess.net/blog/best-10-chess-books/" class="button">Ichess</a></li>
                      </ul> 
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.goodreads.com/list/show/6623.Best_Chess_Books" class="button">GoodReads</a></li>
                      </ul>   

              </section>


              <section id="Cooking">
                <h2>Cooking</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.allrecipes.com/?page=2" class="button">Recipes</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.bettycrocker.com/" class="button">Cookboooks</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="http://www.eatingwell.com/" class="button">Healthy recipes</a></li>
                      </ul>  
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.thespruceeats.com/indian-4162611" class="button">Indian food and recipes</a></li>
                      </ul>      
                      <h3>Chefs teaching Indian Cuisine</h3>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/user/NishaMadhulika" class="button">Nisha Madhulika</a></li>
                      </ul> 
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/user/chefkunal3005" class="button">Kunal</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/user/swaadanusaar" class="button">Swaad Anusar</a></li>
                      </ul>
                      

              </section>


              <section id="Workout">
                <h2>Workout</h2>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=ofTiKY3hYdE&t=727s" class="button">10 minute home workout for 6 packs + fat burning </a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=Yrv4HMJCklI&t=540s" class="button">Daily morning workout</a></li>
                      </ul>  
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=0rh5HCNU_Iw&t=222s" class="button">Leg Workout</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=3p8EBPVZ2Iw&t=257s" class="button">Core Workout for Beginners</a></li>
                      </ul>                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=SPHZVmJAAhg&t=1s" class="button">Full Body Quarantine Workout</a></li>
                      </ul>  
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=jozzT-_woVE&t=39s" class="button">Back Workout</a></li>
                      </ul>                      
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.youtube.com/watch?v=czt4V6RB4pk&t=272s" class="button">Quick Full Body Workout</a></li>
                      </ul>
                      <h3>Cure fit</h3>
                      <ul class="actions">
                        <li><a target="_blank" href="https://www.cure.fit" class="button">Website</a></li>
                      </ul>
                      <ul class="actions">
                        <li><a target="_blank" href="https://play.google.com/store/apps/details?id=fit.cure.android" class="button">App</a></li>
                      </ul>


              </section>


            </div>
                
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
