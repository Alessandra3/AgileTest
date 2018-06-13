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
        <style>
table, th, td {
    border: 1px solid black;
}
</style>
    </head>
    <body class="homepage">

        <div id="page-wrapper">
        <!-- Header -->
        <div id="header">
            <!-- Inner -->
            <div class="inner">
            <?php echo form_open('send_answer_2');?>
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
	                            <td><select  size="1" id="row-1-office" name="row1">
						                    <option  value="Poor" name="one" selected="selected">
						                        Poor
						                    </option>
						                    <option type ="submit" value="Good">
						                        Good
						                    </option>
						                    <option type ="submit" value="Not Perceived">
						                        Not Perceived
						                    </option>
						                    <option type ="submit" value="Conflict Options">
						                        Conflict Options
						                    </option>
	                				</select></td></td>
                            	<td><select size="1" id="row-1-office" name="row2">
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
	                			</select></td>
                           		 <td><select size="1" id="row-1-office" name="row3">
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
	               				 </select></td>
                            <td><select size="1" id="row-1-office" name="row4">
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
	                		</select></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                    <input align="center" type="submit" name="save" value="Save Data"/>
                </table>
                </form>					
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </body>
</html