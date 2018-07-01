<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Practices List</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/main.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
  .button1 {
    background-color: #df7366;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;  
    position: relative;
    display: inline-block;
    color: #fff;
    border-radius: 0.5em;
    padding: 0.65em 3em 0.65em 3em;
    border: 0;
    outline: 0;
    font-weight: 300;  
}
</style>
  </head>
  <body class="homepage">
    <div id="page-wrapper">
      <!-- Banner -->
      <section id="banner">
        <header>
          <h2>Agile Practices</h2>
          <p>
            Answer questions for each of the following Agile Practices
          </p>
        </header>
      </section>
      <!-- Carousel -->
      <section class="carousel">
        <div class="reel">
          <article>
            <a href="#" class="image featured"><img src="../../images/pic07.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/1">Small Releases</a></h3>
              <h3 style="padding-top: 20px;">Points: <?php echo $small_releases;?> / 8 </h3>
            </header>
            <p>
              “Put a simple system into production quickly, and release new versions on a very short cycle. This practice suggests the team put a simple system into production quickly, and release new versions on a very short cycle. In XP, short iterations of 2 weeks are suggested. In Scrum, it is represented as 30-day Sprints.” 
              <br>
              <br>
              <br>
            </p>
          </article>
          <article>
            <a href="#" class="image featured"><img src="../../images/pic08.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/2">Planning game</a></h3>
              <h3 style="padding-top: 20px;">Points: <?php echo $planning_game;?> / 16 </h3>
            </header>
            <p>
              “Prioritisation of scope for next release based on a combination of business priorities and technical estimates. The ‘planning game’ is a practice of XP, while the corresponding practice in Scrum is referred to as Sprint planning. During a planning game or Sprint planning meeting, tasks for the next Sprint are prioritized based on a combination of business need and technical estimates.”
            </p>
          </article>
          <article>
            <a href="#" class="image featured"><img src="../../images/pic09.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/3">Stand-up meetings </a></h3>
              <h3 style="padding-top: 20px;">Points:  <?php echo $stand_up_meeting;?> / 14 </h3>
            </header>
            <p>
              “Stand-up meetings suggested by XP (or daily meetings by Scrum) are short daily status meetings where team members quickly plan the work of the day and identify any technical obstacles to fulfilling that work. Typical questions used in stand-up meetings are: “What did I work on yesterday?”, “What do I plan to work on today?” and “What is getting in my way?”.
              <br>
              <br>
            </p>
          </article>
          <article>
            <a href="#" class="image featured"><img src="../../images/pic09.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/4">Retrospective Meeting</a></h3>
              <h3 style="padding-top: 20px;">Points: <?php echo $retrospective;?> / 12 </h3>
            </header>
            <p>
              “Reflect on method strengths and weaknesses after each cycle.”
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </p>
          </article>
          <article>
            <a href="#" class="image featured"><img src="../../images/pic09.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/5">40-Hours Week</a></h3>
              <h3 style="padding-top: 20px;">Points: <?php echo $hours;?> / 10 </h3>
            </header>
            <p>
              “Work time is generally limited to 40 hours per week.”
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </p>
          </article>
           <article>
            <a href="#" class="image featured"><img src="../../images/pic09.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/6">One-site Costumer</a></h3>
              <h3 style="padding-top: 20px;">Points: <?php echo $costumer;?> / 12 </h3>
            </header>
            <p>
             “This practice suggests that the development team should include an actual user on the team, who is available full time to answer questions.”
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </p>
          </article>
                     <article>
            <a href="#" class="image featured"><img src="../../images/pic09.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/7">Pair Programming</a></h3>
              <h3 style="padding-top: 20px;">Points: <?php echo $pp;?> / 10 </h3>
            </header>
            <p>
          “Pair programming is an agile software development technique in which two programmers work together at one workstation. One, the driver, writes code while the other, the observer or navigator,reviews each line of code as it is typed in.”
              <br>
              <br>
              <br>
              <br>
              <br>
            </p>
          </article>
          <article>
            <a href="#" class="image featured"><img src="../../images/pic09.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/8">Test First</a></h3>
              <h3 style="padding-top: 20px;">Points: <?php echo $test;?> / 8 </h3>
            </header>
            <p>
            “Continually write tests, which must run flawlessly for development to proceed. Write test code before writing function code.”
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </p>
          </article>
          <article>
            <a href="#" class="image featured"><img src="../../images/pic09.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/9">Continuous Integration</a> </h3>
              <h3 style="padding-top: 20px;">Points: <?php echo $integration;?> / 10 </h3>
            </header>
            <p>
           “Integrate and build the system every time a task is completed – this may be many times per day.”
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </p>
          </article>
           <article>
            <a href="#" class="image featured"><img src="../../images/pic09.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/10">Collective Ownership</a></h3>
              <h3 style="padding-top: 20px;">Points:  <?php echo $coll_ownership;?> / 10 </h3>
            </header>
            <p>
          “Anyone can change any code anywhere in the system at any time”
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </p>
          </article>
           <article>
            <a href="#" class="image featured"><img src="../../images/pic09.jpg" alt="" /></a>
            <header>
              <h3><a href="practice_set/11">Open Space</a></h3>
              <h3 style="padding-top: 20px;">Points: <?php echo $open_space;?> / 10 </h3>
            </header>
            <p>
          “Work in an open space environment”
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            </p>
          </article>
        </div>
        <span class="forward" style="display: block;"></span>
        <span class="backward" style="display: block;"></span>
      </section>
           </div>
        <div id="result" align="center"><a href="http://localhost/AgileTest/index.php/result1_controller/" onclick="points_controller()" class="button1">See Results</a></div>

      <script type = "text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
      <script type = "text/javascript" src="<?php echo base_url();?>assets/js/jquery.dropotron.min.js"></script>
      <script type = "text/javascript" src="<?php echo base_url();?>assets/js/jquery.scrolly.min.js"></script>
      <script type = "text/javascript" src="<?php echo base_url();?>assets/js/jquery.onvisible.min.js"></script>
      <script type = "text/javascript" src="<?php echo base_url();?>assets/js/skel.min.js"></script>
      <script type = "text/javascript" src="<?php echo base_url();?>assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script type = "text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
         
   <br>
    <br>
  </body>
</html>