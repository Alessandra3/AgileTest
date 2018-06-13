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
              <h3 style="padding-top: 20px;">Points: <?php echo $small_releases;?> </h3>
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
              <h3 style="padding-top: 20px;">Points: <?php echo $planning_game;?> </h3>
            </header>
            <p>
              “Prioritisation of scope for next release based on a combination of business priorities and technical estimates. The ‘planning game’ is a practice of XP, while the corresponding practice in Scrum is referred to as Sprint planning. During a planning game or Sprint planning meeting, tasks for the next Sprint are prioritized based on a combination of business need and technical estimates.”
            </p>
          </article>
          <article>
            <a href="#" class="image featured"><img src="../../images/pic09.jpg" alt="" /></a>
            <header>
              <h3><a href="#">Stand-up meetings </a></h3>
              <h3 style="padding-top: 20px;">Points:</h3>
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
              <h3><a href="#">Retrospective Meeting</a></h3>
              <h3 style="padding-top: 20px;">Points:</h3>
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
              <h3><a href="#">40-Hours Week</a></h3>
              <h3 style="padding-top: 20px;">Points:</h3>
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
        </div>
        <span class="forward" style="display: block;"></span>
        <span class="backward" style="display: block;"></span>
      </section>
           </div>
        <div align="center"  ><a href="http://localhost/AgileTest/index.php/result1_controller/" class="button">See Results</a></div>

      <script type = "text/css" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
      <script type = "text/css" src="<?php echo base_url();?>assets/js/jquery.dropotron.min.js"></script>
      <script type = "text/css" src="<?php echo base_url();?>assets/js/jquery.scrolly.min.js"></script>
      <script type = "text/css" src="<?php echo base_url();?>assets/js/jquery.onvisible.min.js"></script>
      <script type = "text/css" src="<?php echo base_url();?>assets/js/skel.min.js"></script>
      <script type = "text/css" src="<?php echo base_url();?>assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script type = "text/css" src="<?php echo base_url();?>assets/js/main.js"></script>
    <br>
    <br>
  </body>
</html>