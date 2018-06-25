<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	header('Access-Control-Allow-Origin: *');
	?>
<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	-->
<html>
	<head>
		<title>Table</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/main.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/ie8.css">
		<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/font-awesome.min.css">
		<!--[if lte IE 8]>
		<link rel="stylesheet" href="assets/css/ie8.css" />
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<style>
			table, th, td {
			border: 1px solid black;
			}
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
		</style>
	</head>
	<body class="homepage">
		<div id="page-wrapper">

		  <div id="header">
          <h1>Are You Agile?</h1>
          <br>
			<div class="inner">
                     
                <table>
					<thead>
						<tr>
							<td>Practice Name</td>
							<td>Creativity</td>
							<td>Proaction</td>
							<td>Reaction</td>
							<td>Learning</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($max_prac as $item):?>	
						<tr>
							<td><?php echo $item['name']?></td>
							<td>
								<select  size="1" id="creat_<?php echo $item['id_practice']?>" onChange="return fun('creat_<?php echo $item['id_practice']?>', <?php echo $item['id_practice']?>, 'creativity')">
									<option value="Poor" selected="selected">
										Poor
									</option>
									<option value="Good">
										Good
									</option>
									<option value="Not Perceived">
										Not Perceived
									</option>
									<option value="Conflict Options">
										Conflict Options
									</option>
								</select>
							</td>
							</td>
							<td>
								<select size="1" id="proac_<?php echo $item['id_practice']?>" onChange="return fun('proac_<?php echo $item['id_practice']?>', <?php echo $item['id_practice']?>, 'proaction')">
									<option value="Poor" selected="selected">
										Poor
									</option>
									<option value="Good">
										Good
									</option>
									<option value="Not Perceived">
										Not Perceived
									</option>
									<option value="Conflict Options">
										Conflict Options
									</option>
								</select>
							</td>
							<td>
								<select size="1" id="react_<?php echo $item['id_practice']?>" onChange="return fun('react_<?php echo $item['id_practice']?>', <?php echo $item['id_practice']?>, 'reaction')">
									<option value="Poor" selected="selected">
										Poor
									</option>
									<option value="Good">
										Good
									</option>
									<option value="Not Perceived">
										Not Perceived
									</option>
									<option value="Conflict Options">
										Conflict Options
									</option>
								</select>
							</td>
							<td>
								<select size="1" id="learn_<?php echo $item['id_practice']?>" onChange="return fun('learn_<?php echo $item['id_practice']?>', <?php echo $item['id_practice']?>, 'learning')">
									<option value="Poor" selected="selected">
										Poor
									</option>
									<option value="Good">
										Good
									</option>
									<option value="Not Perceived">
										Not Perceived
									</option>
									<option value="Conflict Options">
										Conflict Options
									</option>
								</select>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
				<script type="text/javascript">
					function fun(id_sel, id_practice, name_property) {
						var selector = document.getElementById(id_sel);
						var val_selected = selector[selector.selectedIndex].value;
						console.log(id_practice, name_property, val_selected);
						$.ajax({
							url: 'ajax_add',
							method: 'post',
							data: {id : id_practice , property: name_property , value: val_selected},
							dataType: 'json',
							success : function(response){
								console.log(response);
							}
						});
						return true;
					}
				</script>			
			</div>
             <div align="center"><a href="http://localhost/AgileTest/index.php/graph_controller/" class="button1">See Test Result</a></div>
			<br>
			<br>
			<br>
			<br>
		</div>       
	</body>
	</html>