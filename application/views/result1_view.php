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

.prac{

  width: 170px;
   position: absolute;
    top: 360px;
    left: 270px;
    font-size: 25px;

}

</style>
  </head>
  <body class="homepage">
    <div id="page-wrapper">
      <div id="header">
        <div class="inner">
          <header>
            <h1>Are You USING Agile?</h1>
            <br>
                  <p>Great! The first part of your test is finished! This is the result:</p>
                <BR>
                <p style="font-weight: bold">TOTAL POINTS: <?php echo $max_points;?><BR> </p>
                <br>
                <p align="center">The following are the Agile Practices you are using correctly: </p>
              </header>
              <footer>
              <br>
              	<div class="prac">
                <?php foreach ($max_prac as $item):?>
              		<?php echo $item['name'];?>
              	<?php endforeach;?> 
              	</div>
          	<br>
          	<br>
            <br>
            <br>
            <br>
            <br>
          	<div align="center"><a href="http://localhost/AgileTest/index.php/pra_table_controller/" class="button1">Countinue The Test</a></div>       
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>