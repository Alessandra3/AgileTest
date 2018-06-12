<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?>
<!DOCTYPE HTML>
<!--
  Helios by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
  -->
<html>
  <head>
    <title>Are You Using Agile?</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/main.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/ie8.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/font-awesome.min.css">
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
      <div id="header">
        <div class="inner">
          <header>
            <h1>Are You USING Agile?</h1>
            <hr />
            <p>Great! The first part of your test is finished! This is the result:</p>
            <p>Total points earned: <?php echo $max_points;?><BR> </p>
            <p align="center">The following are the practices you are using correctly: </p>
          </header>
          <footer>
          	<div>
            <?php foreach ($max_prac as $item):?>
          		<li><?php echo $item['name'];?></li>
          	<?php endforeach;?> 
          	</div> 
          	<br>
          	<br>
          	<div align="center"><a href="http://localhost/AgileTest/index.php/pra_table_controller/" class="button1">Countinue The Test</a></div>       
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>